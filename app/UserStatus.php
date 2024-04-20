<?php

namespace App;

enum UserStatus: int
{
    case ACTIVE = 1;
    case INACTIVE = 2;
    case BANNED = 3;
}
