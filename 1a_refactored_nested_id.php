<?php

class Voucher
{
    function isInactiveVoucher($status){
        if ($status == 'inactive') {
            return TRUE;
        }
    }
    function isExpiredVoucher($status){
        if ($status == 'expired') {
            return TRUE;
        }
    }
    function isWrongPIN($status){
        if ($status == 'wrong') {
            return TRUE;
        }
    }

    function login($status) {
        if ($this->isInactiveVoucher($status) == TRUE) {
            return 'Your Voucher is inactive.';
        }
        if ($this->isExpiredVoucher($status) == TRUE) {
            return 'Your Voucher is expired.';
        }
        if ($this->isWrongPIN($status) == TRUE) {
            return 'Wrong Password!';
        }
        return '.Enjoy Your Stay.';
    }
}

$voucher = new Voucher;
$withdrawl = $voucher->login('active', 'exist', 'right');
echo $withdrawl;