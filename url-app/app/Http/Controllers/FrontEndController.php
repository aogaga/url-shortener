<?php
/**
 * Created by: Ogaga Agi (aogaga).
 * Github: https://github.com/aogaga
 * Twitter: @aogaga
 * Date: 8/23/20
 * Time: 5:04 PM
 * Project url-app
 */

namespace App\Http\Controllers;
use App\Domain\Model\Urlvisit;
use App\Domain\Repository\Contracts\UrlRepositoryInterface;
use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redirect;

class FrontEndController extends BaseController
{
    private $urlRepository;
    public function __construct(UrlRepositoryInterface $urlRepository)
    {
        $this->urlRepository = $urlRepository;
    }

    public function index(){
        return view('welcome');
    }

    public function getUrl($hashcode){

        $urlObj = $this->urlRepository->getUrlByHashCode($hashcode);

        $visit = new Urlvisit();
        $visit->ipaddress = \Illuminate\Support\Facades\Request::ip();
        $urlObj->UrlVisits()->save($visit);
        return  Redirect::to($urlObj->url);

    }
}
