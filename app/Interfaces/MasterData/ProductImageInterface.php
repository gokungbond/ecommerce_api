<?php

namespace App\Interfaces\MasterData;

interface ProductImageInterface 
{
    public function acceptableMimeTypes() : array;

    public function defaultDiskStorage() : string;

    public function defaultStorageLocation() : string;

    public function uploadFile($productId);

    public function isFileExists($productId, $id);

    public function deleteFile($productId, $id);

}