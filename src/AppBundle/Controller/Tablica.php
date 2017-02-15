<?php
/**
 * Created by PhpStorm.
 * User: Mateusz
 * Date: 2016-06-08
 * Time: 13:30
 */

namespace AppBundle\Controller;


class Tablica
{
    public static function wypelnienie($iloscLudzi, $iloscDni, $zmiana)
    {
        $tablicaPrzydzialow= array();
        for ($i=0;$i<$iloscLudzi;$i++)
            $tablicaPrzydzialow[$i]=array();

            for($i=0;$i<$iloscLudzi; $i++)
                for($j=0;$j<$iloscDni; $j++)
                    {$tablicaPrzydzialow[$i][$j]=0;}

        for($i=0;$i<$iloscLudzi; $i++)
            for($j=$zmiana-1;$j<$iloscDni; $j+=3)
            {
                if($j<=$iloscDni)
                    $tablicaPrzydzialow[$i][$j]=16;
                if(($j+1)<$iloscDni)
                    $tablicaPrzydzialow[$i][$j+1]=8;
                if(($j+2)<$iloscDni)
                    $tablicaPrzydzialow[$i][$j+2]=0;
            }
        return  $tablicaPrzydzialow;
    }

    public static function wypelnienie2($iloscLudzi, $iloscDni, $ostatniDzien)
    {
        $tablicaPrzydzialow= array();
        for ($i=0;$i<$iloscLudzi;$i++)
            $tablicaPrzydzialow[$i]=array();

            for($i=0;$i<$iloscLudzi; $i++)
                for($j=0;$j<$iloscDni; $j++)
                    {$tablicaPrzydzialow[$i][$j]=0;}

        for($i=0;$i<$iloscLudzi; $i++)
        { $tmp = ($ostatniDzien-8);
          if($tmp<0)
          $tmp=16;
            for($j=0;$j<$iloscDni; $j++)
            {
                $tablicaPrzydzialow[$i][$j]= $tmp;
                $tmp = ($tmp-8);
                if($tmp<0)
                $tmp=16;

            }

      }
        return  $tablicaPrzydzialow;

    }

    public static function wyszukiwanieOsemek($nrWiersza,$tablicaPrzydzielen)
    {


        $tablica = array();
        $j=0;

        for ($i=0; $i<count($tablicaPrzydzielen[$nrWiersza]); $i++)
        {

            if($tablicaPrzydzielen[$nrWiersza][$i]==8)
                {
                if($i>=3){
                    if($tablicaPrzydzielen[$nrWiersza][$i-3]==8)
                        if(($i+3)<count($tablicaPrzydzielen[$nrWiersza])){
                            if($tablicaPrzydzielen[$nrWiersza][$i+3]==8)
                            {
                                $tablica[$j]=$i;
                                $j++;
                            }
                        }}}
            if($tablicaPrzydzielen[$nrWiersza][$i]==8){
            if ($i<3)
                if($tablicaPrzydzielen[$nrWiersza][$i+3]==8)
                {
                    $tablica[$j]=$i;
                    $j++;
                }
              }
        }
        $tablica = Tablica::losowanieDanychTablicy($tablica);
        return $tablica;
    }

    public static function losowanieDanychTablicy($tablica)
    {

        $iloscKomorek=(count($tablica)-1);
        $tablicaLosowa =  array();
        for ($i = 0; $i<$iloscKomorek;$i++)
        {
            $zmienna=rand(0,$iloscKomorek);
            $tablicaLosowa[$i]= $tablica[$zmienna];
            $tablica[$zmienna]= $tablica[$iloscKomorek-1];
            $iloscKomorek-=1;
        }
        return $tablicaLosowa;
    }


    public static function sumowanieWiersza($tablica, $nrWiersza)
    {
        $suma= 0;
        for ($i=0; $i<count($tablica[0]); $i++)
            $suma+= $tablica[$nrWiersza][$i];
        return $suma;
    }


    public static function przydzielanie ($tablica, $wymaganaIloscGodzin)
    {
        for ($i=0; $i<count($tablica); $i++)
        {
            $suma = Tablica::sumowanieWiersza($tablica, $i);

            while($suma-24>$wymaganaIloscGodzin)
            {
                $tablicaOsemek= Tablica::wyszukiwanieOsemek($i,$tablica);
                if (count($tablicaOsemek)>0){
                    $j=$tablicaOsemek[0];

                    if($j-1>=0)
                    {
                    $tablica[$i][$j]=0;
                    $tablica[$i][$j-1]=0;
                    $suma-=24;
                    }
              /*  elseif ($j-1<0)
                {
                  $tablica[$i][$j]=0;
                  $suma-=8;
                }*/

                }
                else
                    break;

            }
            $sytuacja= Tablica::sytuacja($suma, $wymaganaIloscGodzin);

            if ($sytuacja==2)
            {
                $tablicaOsemek= Tablica::wyszukiwanieOsemek($i,$tablica);
                if (count($tablicaOsemek)>0){
                    $j=$tablicaOsemek[0];
                    if($j-1>=0)
                    {
                      $tablica[$i][$j]=0;
                      $tablica[$i][$j-1]=0;
                      $suma-=24;
                    }
                    else if (count($tablicaOsemek)>1)
                    {
                        $j=$tablicaOsemek[1];
                        $tablica[$i][$j]=0;
                        $tablica[$i][$j-1]=0;
                        $suma-=24;
                    }
                    else {
                      //sytuacja 3??
                      //$sytuacja = 3;
                    }
                }

            }
              $sytuacja= Tablica::sytuacja($suma, $wymaganaIloscGodzin);

            if ($sytuacja==3)
            {

                $tablicaOsemek= Tablica::wyszukiwanieOsemek($i,$tablica);
                if (count($tablicaOsemek)>0){
                    $j=$tablicaOsemek[0];

                    $tablica[$i][$j]=0;
                    $suma-=8;


                }
            }


        }
        return $tablica;
    }

    public static function sytuacja ($suma,$wymaganaIloscGodzin)

    {
        $tablica = array();
        $tablica[0]= abs($wymaganaIloscGodzin - $suma);
        $tablica[1]= abs($wymaganaIloscGodzin - ($suma-24));
        $tablica[2]= abs($wymaganaIloscGodzin - ($suma-8));
        $minimum= $tablica[0];

        for($i=0; $i<count($tablica);$i++)
            if($minimum>=$tablica[$i])
            {
                //System.out.println(tablica[i]);
                $minimum=$tablica[$i];
            }
        $sytuacja=0;
        for( $i=0;$i<count($tablica);$i++)
        {
            if($minimum == $tablica[$i])
                $sytuacja=$i+1;
        }
        return $sytuacja;

    }


}
