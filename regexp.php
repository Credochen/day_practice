<?php
if(0){
    //匹配一次或多次
    var_dump(preg_match('/fo+/', 'fool'));
    //匹配0次或连续多次
    var_dump(preg_match('/f*/', 'fool'));
    var_dump(preg_match('/eg*/', 'ego'));
    var_dump(preg_match('/eg*/', 'egg'));
    //匹配0次或1次
    var_dump(preg_match('/fooll?/', 'fool'));

    var_dump(preg_match('/cgp{2,6}/', 'cgpp'));
}
if(0) {
/**
 * 元字符
 */
    // \s：用于匹配单个空格符，包括tab键和换行符；
    var_dump(preg_match('/cgp\s+/', 'cgp p'));
    // \w：用于匹配字母、数字、下划线
    var_dump(preg_match('/cgp\w/', 'cgp1p'));
    // \d：匹配数字 ，eg:匹配大于1000的数字
    preg_match_all('/\d000/', 'cgp1000,2000,300,400', $match);
    print_r($match);
}
if(0) {
/**
 * 定位符 
 *  “^”, “$”, “\b” 以及 “\B”
 */
    // ^：规定匹配模式必须出现在目标字符串的开头
    var_dump(preg_match('/^cgp\w/', 'cgp1p'));//1
    //“$”定位符规定匹配模式必须出现在目标对象的结尾
    var_dump(preg_match('/gp$/', 'cgp'));//1
    //\b
    var_dump(preg_match('/\bcgp/', 'cgpWithPHP'));//1
    var_dump(preg_match('/cgp\b/', 'WithPHPcgp'));//1
}
if(0) {
    var_dump(preg_match('/[a-z][\d+]/', 'abc123'));
    var_dump(preg_match('/([a-z][A-Z][0-9])+/', 'aB3ABCdcgpcgp'));
    // “|”：或运算
    var_dump(preg_match('/([a-z][A-Z][0-9])|abc+/', 'abcaB3ABCdcgpcgp'));
    //“[^]”：否定符，eg：匹配不含a-z字母的字符串
    //一般来说，当“^”出现在 “[]”内时就被视做否定运算符；而当“^”位于“[]”之外，或没有“[]”时，则应当被视做定位符。
    var_dump(preg_match('/[^a-z]/', 'abcdfad'));
    
    var_dump(preg_match('/[^a-z]The\*/', '0The*'));
    var_dump(preg_match('/^abc$/', 'abc'));
    var_dump(preg_match('/a?b+$/', 'abcdefb'));

    var_dump(preg_match('/ab{3,5}/', 'abbbbbb'));
    var_dump(preg_match('/(ab|c|d)+ep/', 'deprecatedf'));
    //一个a加一个字符再加一个或多个0到9的数字；
    var_dump(preg_match('/a.\d+/', 'aF9160'));
    //三个任意字符结尾
    var_dump(preg_match('/^.{3}$/', 'a\9'));
    //匹配单个的 a 或者 b ( 和 "a│b" 一样)；
    var_dump(preg_match('/[ab]/', 'be\9'));
    // 匹配'a' 到'd'的单个字符 (和"a│b│c│d" 还有 "[abcd]"效果一样)；
    var_dump(preg_match('/[a-d]/', 'c\9'));
    var_dump(preg_match('/[abcd]/', 'c\9'));
    //匹配以大小写字母开头的字符串
    var_dump(preg_match('/^[a-zA-Z]/', 'Ac\9'));
    
    var_dump(preg_match('/^￥\d000/', '￥10000'));
    
}

function matchMoney($money) {
    // $pat = '/^[1-9]\d+$/';
    //$pat = '/^(0|[1-9][0-9]*)$/';
    // $pat = '/^(0|-?[1-9][0-9]*)$/';
    //$pat = '/^[0-9]+(\.[0-9]{1,2})?$/';
    $pat = '/^[0-9]{1,3}(,[0-9]{3})*(\.[0-9]{1,2})?$/';
    return preg_replace($pat, $pat, $money);
    //return preg_match($pat, $money);
}
echo matchMoney('10422222.05');
function matchEmail($email) {
    $pat = '/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-z0-9]+(\.[a-z0-9-]+)*$/';
    return preg_match($pat, $email);
}
echo matchEmail('fu@22.com');