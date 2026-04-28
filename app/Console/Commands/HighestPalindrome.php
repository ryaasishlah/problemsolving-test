<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('palindrome:highest {s} {k}')]
#[Description('Mencari palindrome terbesar dengan maksimal k perubahan')]
class HighestPalindrome extends Command
{
    public function handle()
    {
        $s = $this->argument('s');
        $k = (int) $this->argument('k');

        $arr = str_split($s);

        if (!$this->makePalindrome($arr, 0, count($arr) - 1, $k)) {
            $this->info('-1');
            return;
        }

        $this->maximize($arr, 0, count($arr) - 1, $k);

        $this->info(implode('', $arr));
    }

    private function makePalindrome(&$arr, $l, $r, &$k)
    {
        if ($l >= $r) return true;

        if ($arr[$l] !== $arr[$r]) {
            if ($k <= 0) return false;

            if ($arr[$l] > $arr[$r]) {
                $arr[$r] = $arr[$l];
            } else {
                $arr[$l] = $arr[$r];
            }

            $k--;
        }

        return $this->makePalindrome($arr, $l + 1, $r - 1, $k);
    }

    private function maximize(&$arr, $l, $r, &$k)
    {
        if ($l > $r || $k <= 0) return;

        if ($l === $r) {
            if ($k > 0) $arr[$l] = '9';
            return;
        }

        if ($arr[$l] !== '9') {
            if ($k >= 2) {
                $arr[$l] = $arr[$r] = '9';
                $k -= 2;
            }
        }

        $this->maximize($arr, $l + 1, $r - 1, $k);
    }
}
