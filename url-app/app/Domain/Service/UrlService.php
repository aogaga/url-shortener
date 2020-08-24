<?php
/**
 * Created by: Ogaga Agi (aogaga).
 * Github: https://github.com/aogaga
 * Twitter: @aogaga
 * Date: 8/23/20
 * Time: 2:58 PM
 * Project url-app
 */

namespace App\Domain\Service;


use App\Domain\Model\Url;
use App\Domain\Repository\Contracts\UrlRepositoryInterface;
use App\Domain\ResourceModels\ResourceUrl;
use App\Domain\Service\Infrastructure\HashServiceInterface;
use App\Domain\Service\Infrastructure\UrlServiceInterface;

class UrlService implements UrlServiceInterface
{
    private $urlRepository;
    private $hashService;

    public function __construct(HashServiceInterface $hashService, UrlRepositoryInterface $urlRepository){
        $this->hashService = $hashService;
        $this->urlRepository = $urlRepository;
    }
    public function getUrl($id)
    {

    }

    public function createUrl($url, $email)
    {
        $hashCode = $this->hashService->getHashCode();
        $hashCodeExist =   $this->urlRepository->getUrlByHashCode($hashCode);
        while(is_null($hashCode)){
            $hashCode = $this->hashService->getHashCode();
            $hashCodeExist =   $this->urlRepository->getUrlByHashCode($hashCode);
        }

         $data = array(
             'url' => $url,
             'hashcode' => $hashCode,
             'email' => $email
         );

        $urlObj =  $this->urlRepository->create($data);

        return \url("/{$urlObj->hashcode}");
    }

    public function getUrlByShortCode($shortCode)
    {
        return  $this->urlRepository->getUrlByHashCode($shortCode);
    }
}
