<?php

namespace Application\Controller;

class Miesiace
{
    public function pobierzWszystkie(): array
    {
        return [["Styczeń","Yellow"],['Luty','Blue'],['Marzec','Orange'],['Kwiecień','Green'],['Maj','Red'],['Czerwiec','Pink'],['Lipiec','LightBlue'],['Sierpień','Purple'],['Wrzesień','Brown'],['Październik','Grey'],['Listopad','White'],['Grudzień','Black']];
    }
}