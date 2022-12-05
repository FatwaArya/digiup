<?php

/**
 * jika nilai antara 91 - 100 mendapatkan A
 * jika nilai antara 81 - 90 mendapatkan B
 * jika nilai antara 71 - 80 mendapatkan C
 * jika nilai antara 61 - 70 mendapatkan D
 * jika nilai < 61 mendapatkan E
 */
$nilai = 10;
if ($nilai >= 91 and $nilai <= 100) {
    echo "A";
} else if ($nilai >= 81 and $nilai <= 90) {
    echo "B";
} else if ($nilai >= 71 and $nilai <= 80) {
    echo "C";
} else if ($nilai >= 61 and $nilai <= 70) {
    echo "D";
} else {
    echo "E";
}
