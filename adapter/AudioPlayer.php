<?php
require_once "./AdvancedMediaPlayer.php";
require_once "./MediaAdapter.php";
/**
 * Author: Karen
 * Date: 2019/9/26 0026
 */
class AudioPlayer implements MediaPlayer
{
    private $mediaAdapter;

    public function play($audioType, $fileName)
    {
        // TODO: Implement play() method.
        //播放 mp3 音乐文件的内置支持
        if (strcasecmp($audioType, 'mp3') == 0) {
            echo "Playing mp3 file. Name: " . $fileName . "\n";
        }
        //mediaAdapter 提供了播放其他文件格式的支持
        elseif (strcasecmp($audioType, 'vlc') == 0
            || strcasecmp($audioType, 'mp4') == 0) {
            $this->mediaAdapter = new MediaAdapter($audioType);
            $this->mediaAdapter->play($audioType, $fileName);
        } else {
            echo "Invalid media. " .
                $audioType . " format not supported" . "\n";
        }
    }
}
