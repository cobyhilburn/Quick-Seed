<?php

namespace Coby\QuickSeed\App\Services;


class QuickSeedService
{
  private string $file;

  public function __construct(string $file)
  {
    $this->file = $file;
  }

  public function seed()
  {
    $data = $this->readFile();
    $data = $this->processData($data);

    $columns = $this->getColumns($data);
    dd($columns);
  }

  /**
   * Read $file
   *
   * @return false|string
   */
  private function readFile()
  {
    $fileHandler = fopen($this->file, "r");
    $data = fread($fileHandler, filesize($this->file));
    fclose($fileHandler);

    return $data;
  }

  /**
   * Process file contents
   *
   * @param $data
   * @return array
   */
  private function processData($data)
  {
    return explode("\n", $data);
  }

  /**
   * Get columns from file
   *
   * @param $data
   * @return array
   */
  private function getColumns($data): array
  {
    $columns = explode(",", $data[0]);
    foreach ($columns as $column) {
      $column = trim($column);
    }
    return $columns;
  }


}
