<?php

class Revert
{
    public function revertCharacters($str)
    {
        $string = explode(' ', $str);

        foreach ($string as $key => $elem)
        {
            $string[$key] = $this->revertWord($elem);
        }

        return implode(' ', $string);
    }

    private function revertWord($word)
    {
        $arr = str_split($word);
        if (count($arr) === 1)
        {
            return $word;
        }
        $arrRev = str_split(mb_strtolower(preg_replace('/\pP/iu', '', $word)));
        $count = count($arrRev) - 1;

        for ($i = 0; $i < count($arr); $i++)
        {
            if (ctype_punct($arr[$i])) continue;

            if (ctype_upper($arr[$i]))
            {
                $arr[$i] = strtoupper($arrRev[$count]);
            }
            else
            {
                $arr[$i] = $arrRev[$count];
            }

            $count--;
        }

        return implode($arr);
    }
}
