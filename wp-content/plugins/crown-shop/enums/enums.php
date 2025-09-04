<?php
namespace CrownShop\Enums;

enum DualManagerMode: string {
    case ADMIN = 'admin';
    case SWITCHED_AS_USER = 'switched_as_user';
}