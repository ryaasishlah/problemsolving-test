# Problem Solving Test (Laravel)

Repo ini berisi jawaban dari 3 soal problem solving.  
Semua dibuat pakai Laravel (Artisan Command) biar mudah dites lewat terminal.

---

## Struktur Folder

```
app/Console/Commands/
- GenerateA000124.php
- DenseRanking.php
- HighestPalindrome.php

screenshots/
- soal1_case1.png
- soal1_case2.png
- soal1_case3.png
- soal2_case1.png
- soal2_case2.png
- soal2_case3.png
- soal3_case1.png
- soal3_case2.png
- soal3_case3.png
```

---

## Soal 1 — A000124

Generate deret angka berdasarkan rumus A000124.

Contoh:

```
php artisan sequence:a000124 7
```

Output:

```
1-2-4-7-11-16-22
```

---

## Soal 2 — Dense Ranking

Menentukan ranking berdasarkan skor dengan sistem dense ranking  
(angka sama → ranking sama, tidak ada loncatan).

Contoh penggunaan:

```
php artisan ranking:dense 5
php artisan ranking:dense 25
php artisan ranking:dense 50
php artisan ranking:dense 120
```

---

## Soal 3 — Highest Palindrome

Mengubah string angka jadi palindrome terbesar dengan maksimal k perubahan.

Contoh:

```
php artisan palindrome:highest 3943 1
php artisan palindrome:highest 932239 2
php artisan palindrome:highest 1234 1
```

---

## Screenshot

Semua hasil test ada di folder:

```
screenshots/
```

---

## Catatan

- Beberapa soal ada constraint (misalnya harus pakai rekursif, tidak boleh looping)
- Dicoba dengan beberapa input (lihat screenshot)

---
