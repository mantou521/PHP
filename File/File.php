<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/2/4
 * Time: 下午4:30
 */

namespace File;

class File
{
    protected $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * 返回当前目录下的所有文件
     */
    public function files()
    {
        $this->checkFilePath();

        return $this->currentDirFiles();
    }

    /**
     * 遍历返回所有文件
     *
     * @return bool
     */
    public function allFiles()
    {
        $this->checkFilePath();
        $this->explorerDir($this->filePath, $files);
        return $files;
    }

    private function checkFilePath()
    {
        if (!is_dir($this->filePath)) die('文件路径错误');

        return true;
    }

    /**
     * 读取当前路径下的文件
     *
     * @return array|bool
     */
    private function currentDirFiles()
    {
        $handle = opendir($this->filePath);
        $files = [];

        while ($file_name = readdir($handle)) {
            if (!is_dir($file_name)) {
                $files[] = $this->filePath . '/' . $file_name;
            } else {
                continue;
            }
        }
        closedir($handle);

        if ($files) {
            return $files;
        } else {
            return false;
        }
    }

    private function explorerDir($dir, &$files)
    {
        $handle = opendir($dir);

        while ($file = readdir($handle)) {
            if ($file != '.' and $file != '..') {
                $path = $dir . '/' . $file;
                if (is_dir($path)) {
                    $this->explorerDir($path, $files);
                } else {
                    $files[] = $path;
                }
            }
        }
        closedir($handle);

    }
}