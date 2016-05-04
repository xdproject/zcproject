<?php

//时间转换函数

function tranTime($time) {
    $rtime = date("m-d H:i",$time);
    $rtime2 = date("Y-m-d H:i",$time);
    $htime = date("H:i",$time);
    $time = time() - $time;
    if ($time < 60) {
        $str = '刚刚';
    }
    elseif ($time < 60 * 60) {
        $min = floor($time/60);
        $str = $min.'分钟前';
    }
    elseif ($time < 60 * 60 * 24) {
        $h = floor($time/(60*60));
        $str = $h.'小时前 ';//.$htime;
    }
    elseif ($time < 60 * 60 * 24 * 3) {
        $d = floor($time/(60*60*24));
        if($d==1)
            $str = '1天前 ';//.$htime;
        else
            $str = '2天前 ';//.$htime;
    }
    elseif ($time < 60 * 60 * 24 * 7) {
        $d = floor($time/(60*60*24));
        $str = $d.' 天前 ';//.$htime;
    } elseif ($time < 60 * 60 * 24 * 30) {
        $str = $rtime;
    }
    else {
        $str = $rtime2;
    }
    return $str;
}


function time2Units ($time)
{
    $year = floor($time / 60 / 60 / 24 / 365);
    $time -= $year * 60 * 60 * 24 * 365;
    $month = floor($time / 60 / 60 / 24 / 30);
    $time -= $month * 60 * 60 * 24 * 30;
    $week = floor($time / 60 / 60 / 24 / 7);
    $time -= $week * 60 * 60 * 24 * 7;
    $day = floor($time / 60 / 60 / 24);
    $time -= $day * 60 * 60 * 24;
    $hour = floor($time / 60 / 60);
    $time -= $hour * 60 * 60;
    $minute = floor($time / 60);
    $time -= $minute * 60;
    $second = $time;
    $elapse = '';
    $unitArr = array('年' =>'year', '个月'=>'month', '周'=>'week', '天'=>'day',
        '小时'=>'hour', '分钟'=>'minute', '秒'=>'second'
    );
    foreach ( $unitArr as $cn => $u )
    {
        if ( $$u > 0 )
        {
            $elapse = $$u . $cn;
            break;
        }
    }
    return $elapse;
}
$past = 1461227496; // 发布日期
$now = strtotime(date("Y-m-d H:i:s")); // 当前日期
$diff = $now - $past;//相差值
echo '发表于' . time2Units($diff) . '前';
//
//$ers = strtotime('2016-02-01');
//echo tranTime($ers);