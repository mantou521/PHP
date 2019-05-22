<?php

/**
 * 3、写一个函数，获取一篇文章内容中的全部图片，并下载
 *
 */





download_images('https://learnku.com/articles/20714');


/**
 * @param string $article_url
 * @param string $image_path
 */
function download_images($article_url = '', $image_path = 'tmp')
{
    $content = file_get_contents($article_url);

    $reg_tag = '/<img.*?\"([^\"]*(jpg|bmp|jpeg|gif|pgn)).*?>/';
    preg_match_all($reg_tag, $content, $match_result);
    $pic_url_array = array_unique($match_result[1]);

    $dir = getcwd(). DIRECTORY_SEPARATOR . $image_path;
    $dir = iconv("UTF-8", "GBK", $dir);
    if (false === is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    foreach ($pic_url_array as $pic_url) {
        //获取文件信息
        $ch = curl_init($pic_url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_NOBODY, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $fileInfo = curl_exec($ch);
        $httpinfo = curl_getinfo($ch);
        curl_close($ch);

        //获取图片文件后缀
        $ext = strrchr($pic_url, '.');
        $filename = $dir . '/' . uniqid() . $ext;
        //保存图片信息到文件
        $local_file = fopen($filename, 'w');
        if (false !== $local_file) {
            if (false !==fwrite($local_file, $fileInfo)) {
                fclose($local_file);
            }
        }
    }

}

