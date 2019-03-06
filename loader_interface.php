<?php
include_once('csv_file_loader.php');

interface LoaderInterface
{
    /**
     * @return \Generator
     * @throws \Exception
     */
    public function getItems();
    /**
     * @return array
     * @throws \Exception
     */
    public function getItemsArray();
    /**
     * @return int
     * @throws \Exception
     */
    public function countItems();
}
