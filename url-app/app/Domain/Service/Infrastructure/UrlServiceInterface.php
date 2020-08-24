<?php
/**
 * Created by: Ogaga Agi (aogaga).
 * Github: https://github.com/aogaga
 * Twitter: @aogaga
 * Date: 8/23/20
 * Time: 2:29 PM
 * Project url-app
 */

namespace App\Domain\Service\Infrastructure;


interface UrlServiceInterface
{
    public function getUrl($id);
    public function createUrl($url, $email);
    public function getUrlByShortCode($shortCode);

}
