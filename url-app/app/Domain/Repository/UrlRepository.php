<?php
/**
 * Created by: Ogaga Agi (aogaga).
 * Github: https://github.com/aogaga
 * Twitter: @aogaga
 * Date: 8/23/20
 * Time: 2:05 PM
 * Project url-app
 */

namespace App\Domain\Repository;


use App\Domain\Model\Url;
use App\Domain\Repository\Contracts\UrlRepositoryInterface;

class UrlRepository implements UrlRepositoryInterface
{
    public function all()
    {
        return Url::all();
    }

    public function create(array $data)
    {
        return Url::create($data);
    }

    public function update(array $data, $id)
    {

    }

    public function delete($id)
    {
        return Url::destroy($id);
    }

    public function show($id)
    {
      return Url::find($id);
    }

    public function getUrlByHashCode($hashCode)
    {
        return Url::where('hashcode', $hashCode)->first();
    }
}
