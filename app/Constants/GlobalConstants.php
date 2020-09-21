<?php 


namespace App\Constants;


class GlobalConstants {
    const USER_TYPE_FRONTEND = "frontend";
    const USER_TYPE_BACKEND = "backend";

    const ALL = 'All';

    const LIST_TYPE = [self::USER_TYPE_FRONTEND, self::USER_TYPE_BACKEND];

    const LIST_COUNTRIES = ["Canada", "Uganda", "Malaysia", "Finland", "Spain", "Norway"];

    const SALARY_RANGE = ['401762', '85295', '287072', '456969', '354165'];

}