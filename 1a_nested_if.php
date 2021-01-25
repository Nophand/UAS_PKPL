<?php
// Studi Kasus Proses Login WiFi dengan Voucher wifi.id

class Voucher{
    // Sebelum di refactoring
    function isActiveVoucher($status)
    {
        if ($status == 'active') {
            return TRUE;
        }
    }
    function isExpiredVoucher($status)
    {
        if ($status == 'expired') {
            return TRUE;
        }
    }
    function isWrongPassword($status)
    {
        if ($status == 'wrong') {
            return TRUE;
        }
    }

    function login($statusActiveVoucher, $statusExpiredVoucher, $statusPassword)
    {
        if ($this->isActiveVoucher($statusActiveVoucher) == TRUE) {
            if ($this->isExpiredVoucher($statusExpiredVoucher) == TRUE) {
                return 'Your Voucher is expired.';
            } else {
                if ($this->isWrongPassword($statusPassword) == TRUE) {
                    return 'Wrong Password!';
                    } else {
                        return '.Enjoy Your Stay.';
                    }
                }
            }else {
            return 'Your Voucher is inactive.';
        }
    }
}

$voucher = new Voucher;
$withdrawl = $voucher->login('active', 'exist', 'right');
echo $withdrawl;
?>