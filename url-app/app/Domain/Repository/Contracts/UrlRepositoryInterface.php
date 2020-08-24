<?php
/**
 * Created by: Ogaga Agi (aogaga).
 * Github: https://github.com/aogaga
 * Twitter: @aogaga
 * Date: 8/23/20
 * Time: 3:54 PM
 * Project url-app
 */

namespace App\Domain\Repository\Contracts;


use App\Domain\Model\Url;

interface UrlRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function show($id);

    public function getUrlByHashCode($hashCode);


}
