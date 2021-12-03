<?php
function newFileName($filename, $dir) {
    $arr = array_slice(scandir($dir), 2);
    if (in_array($filename, $arr)) {
        preg_match('/^(\S+)\.(jpe?g)$/is', $filename, $matches);
        $sample = '/' . $matches[1] . '_(\d+)\.' . $matches[2] . '/i';
        $arrNames = [];
        for ($i = 0; $i < count($arr); $i++) {
            if (preg_match($sample, $arr[$i], $matches2)) {
                $arrNames[] = $matches[1] . '_' . $matches2[1] . '.' . $matches[2];
            }
        }
        if (!empty($arrNames)) {
            $maxIndex = $arrNames[count($arrNames) - 1];
            preg_match($sample, $maxIndex, $matches3);
            $newName = $matches[1] . '_' . ($matches3[1] + 1) . '.' . $matches[2];
        } else {
            $newName = $matches[1] . '_1.' . $matches[2];
        }
        return $newName;
    }
    return $filename;
}