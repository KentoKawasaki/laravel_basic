<?php
namespace App\Services;

class CheckFormService {
    public static function checkGender($data) {
        return $data->gender === '0' ? '男性' : '女性';
    }

    public static function checkAge($data) {
        switch($data->age) {
            case "1":
                $age = '～19歳';
                break;
            case "2":
                $age = '20歳～29歳';
                break;
            case "3":
                $age = '30歳～39歳';
                break;
            case "4":
                $age = '40歳～49歳';
                break;
            case "5":
                $age = '50歳～59歳';
                break;
            case "6":
                $age = '60歳～';
                break;
            default:
                dd($data->age);
                break;
        }

        return $age;
    }
}