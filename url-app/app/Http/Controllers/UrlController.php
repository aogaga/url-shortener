<?php
/**
 * Created by: Ogaga Agi (aogaga).
 * Github: https://github.com/aogaga
 * Twitter: @aogaga
 * Date: 8/23/20
 * Time: 1:59 PM
 * Project url-app
 */

namespace App\Http\Controllers;
use App\Domain\Service\Infrastructure\HashServiceInterface;
use App\Domain\Service\Infrastructure\UrlServiceInterface;
use Illuminate\Http\Request;

class UrlController extends BaseApiController
{

    private $urlService;

    public function __construct(Request $request, UrlServiceInterface  $urlService)
    {
        parent::__construct($request);
        $this->urlService = $urlService;
    }

    public function index(){
        $url = $this->request->get('url');
        $email = $this->request->get('email');
        return $this->urlService->createUrl($url, $email);
    }
}
