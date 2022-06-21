<?php

if (!function_exists('checkActive')) {
    function checkActive(string $routeName): string {
        if(request()->route()->getName() == $routeName) {
            return 'text-white';
        } else {
            return 'text-secondary';
        }
    }
}
