<?php
 goto JmeSR; H5hQh: $eyecatch = null; goto ib3eK; ed0cA: $response = array(); goto N2G_S; R0ohk: if (!empty($publish_end_at) && (strtotime($publish_end_at) < strtotime("\x31\71\x30\60\x2d\60\x31\55\60\x31\x20\x30\60\72\x30\60\x3a\x30\60") || !checkDatetime($publish_end_at))) { $publish_end_at = date("\x59\x2d\x6d\55\144\x20\110\72\x69") . "\72\x30\60"; } goto SbN2H; kxi5u: $slug = !empty($_POST["\x73\x6c\x75\147"]) ? $_POST["\x73\x6c\165\147"] : ''; goto H5hQh; nAVnd: $version = !empty($_POST["\166\x65\x72\163\151\157\x6e"]) ? $_POST["\x76\x65\x72\163\151\157\x6e"] : 1; goto UXoRd; JmeSR: require_once "\x2e\x2e\x2f\137\163\171\163\164\x65\155\137\150\145\x61\144\145\x72\x2e\x70\x68\x70"; goto ed0cA; rid3n: if (!empty($_POST["\143\141\164\145\147\x6f\x72\x69\145\163"])) { foreach ($_POST["\143\141\x74\145\147\x6f\x72\151\x65\x73"] as $value) { $posted_categories[] = sprintf("\45\60\x34\144", $value); } $category_id = implode("\54", $posted_categories); } goto AZz3Y; KrL5h: if (empty($target_id)) { try { $pdo->beginTransaction(); $target_table = $table_prefix . "\160\157\x73\x74\x73\137\142\141\x73\145"; $new_id = getNextId($target_table); $hash_id = generateHashId($new_id); $sql = "\xa\x9\11\x9\x9\x49\x4e\123\105\x52\124\x20\111\116\124\x4f\40{$table_prefix}\x70\157\163\164\163\x5f\142\x61\x73\x65\xa\11\11\x9\x9\11\x28\40\151\x64\x2c\x20\40\166\145\162\163\151\157\156\54\40\x20\x76\145\x72\x73\151\157\156\145\x64\x5f\141\164\54\40\40\150\141\x73\x68\x5f\151\x64\x2c\x20\x20\160\145\162\155\x61\154\x69\x6e\x6b\x5f\153\x65\171\x2c\40\40\160\x65\162\x6d\x61\154\151\x6e\153\x5f\165\162\x69\x2c\x20\x20\x70\x75\142\154\x69\x73\x68\x5f\145\156\x64\137\141\164\54\x20\40\x70\x75\x62\154\x69\163\150\x5f\144\x61\x74\145\x74\151\x6d\x65\x2c\40\x20\x73\x69\164\145\137\x69\x64\x2c\x20\x20\160\157\x73\x74\x74\171\160\145\137\151\144\54\x20\40\x70\141\x72\145\156\164\x5f\x69\144\54\x20\40\x63\x61\164\x65\x67\157\162\171\137\151\x64\x2c\40\x20\x74\141\x67\x5f\151\x64\54\40\x20\163\154\x75\x67\54\40\40\x65\171\x65\x63\x61\x74\143\150\x2c\x20\x20\141\x6e\143\150\x6f\x72\x2c\40\x20\x63\x72\x65\141\x74\x65\x64\x5f\141\164\x2c\x20\40\x63\162\x65\141\x74\x65\x64\x5f\x62\x79\54\40\40\x67\x72\157\x75\x70\x65\x64\x5f\142\171\54\40\x20\163\x74\141\164\x75\x73\51\xa\11\x9\x9\11\x56\x41\114\125\105\123\xa\11\11\11\x9\x9\50\72\111\104\x2c\40\72\126\x45\122\123\x49\x4f\116\54\40\72\126\x45\122\x53\x49\x4f\x4e\x45\x44\x5f\101\124\54\x20\x3a\x48\x41\123\110\x5f\x49\104\54\x20\72\x50\x45\x52\115\x41\x4c\x49\116\x4b\x5f\113\x45\x59\x2c\x20\x3a\x50\x45\122\x4d\x41\x4c\x49\116\x4b\137\x55\x52\111\x2c\40\x3a\120\125\102\114\x49\123\x48\x5f\105\116\104\x5f\x41\x54\54\40\72\x50\x55\x42\114\111\x53\110\137\104\101\124\105\x54\111\x4d\105\54\40\x3a\123\111\x54\105\137\x49\x44\x2c\40\72\x50\x4f\x53\x54\x54\x59\120\105\137\x49\x44\x2c\x20\72\120\x41\122\x45\116\x54\x5f\111\104\54\40\x3a\103\x41\124\x45\107\x4f\122\131\137\x49\x44\54\x20\x3a\x54\x41\107\137\111\104\x2c\x20\x3a\x53\114\x55\x47\x2c\x20\72\105\131\105\103\101\124\103\x48\54\40\x3a\101\116\x43\x48\x4f\122\54\40\72\x43\122\105\101\124\105\x44\137\x41\124\54\x20\72\103\x52\x45\x41\124\105\x44\x5f\102\131\54\x20\x3a\x47\122\x4f\x55\120\x45\104\137\102\x59\54\40\72\x53\x54\x41\x54\125\123\51\12\11\x9"; $create_post_base = $pdo->prepare($sql); $create_post_base->bindValue("\x49\x44", $new_id); $create_post_base->bindValue("\x56\105\122\x53\x49\117\116", $version); $create_post_base->bindValue("\126\x45\122\x53\x49\x4f\x4e\105\104\137\101\x54", $_POST["\166\145\x72\163\151\x6f\156\145\144\x5f\x61\164"]); $create_post_base->bindValue("\110\101\x53\110\137\111\x44", $hash_id); $create_post_base->bindValue("\120\105\x52\115\x41\x4c\111\x4e\113\x5f\x4b\x45\131", $_POST["\x70\145\x72\155\x61\x6c\151\156\x6b\x5f\153\145\x79"]); $create_post_base->bindValue("\x50\x45\x52\115\101\114\x49\x4e\113\x5f\125\122\111", $_POST["\160\x65\162\x6d\141\x6c\151\156\153\137\x75\162\x69"]); $create_post_base->bindValue("\120\125\102\x4c\111\123\x48\137\104\101\124\105\x54\111\115\x45", $publish_datetime); $create_post_base->bindValue("\x50\125\x42\114\x49\123\110\x5f\x45\116\104\x5f\101\124", $publish_end_at); $create_post_base->bindValue("\x53\111\124\x45\x5f\x49\104", $_POST["\x73\x69\x74\145\x5f\151\x64"]); $create_post_base->bindValue("\120\117\123\124\x54\131\120\x45\x5f\111\104", $_POST["\160\x6f\x73\164\164\x79\x70\145\137\x69\144"]); $create_post_base->bindValue("\120\x41\x52\105\116\124\x5f\111\x44", $_POST["\x70\141\162\x65\156\x74\x5f\x69\x64"]); $create_post_base->bindValue("\x43\x41\x54\105\107\x4f\x52\x59\x5f\111\104", $category_id); $create_post_base->bindValue("\124\101\107\137\x49\104", $tag_id); $create_post_base->bindValue("\x53\x4c\x55\x47", $slug); $create_post_base->bindValue("\x45\x59\105\x43\101\124\x43\x48", $eyecatch); $create_post_base->bindValue("\x41\x4e\x43\x48\117\x52", $_POST["\141\x6e\143\150\x6f\x72"]); $create_post_base->bindValue("\x43\x52\x45\101\124\x45\104\137\101\x54", date("\131\x2d\155\x2d\x64\40\x48\72\151\72\x73")); $create_post_base->bindValue("\x43\122\x45\101\x54\x45\104\x5f\x42\x59", $_SESSION[$session_key]["\x75\163\x65\x72"]["\x69\x64"]); $create_post_base->bindValue("\107\x52\x4f\x55\x50\x45\x44\x5f\102\131", $_SESSION[$session_key]["\165\163\x65\x72"]["\147\162\x6f\165\x70\x5f\x69\x64"]); $create_post_base->bindValue("\x53\124\101\124\x55\123", $_POST["\163\x74\x61\x74\x75\x73"]); $create_post_base->execute(); $count_insert = $create_post_base->rowCount(); unset($create_post_base); if (!empty($count_insert)) { foreach ($_POST["\x74\x69\164\x6c\x65"] as $language_id => $value) { $sql = "\12\11\11\x9\x9\x9\11\x49\116\123\x45\x52\x54\x20\x49\x4e\x54\x4f\x20{$table_prefix}\160\x6f\163\164\x73\x5f\164\145\x78\164\12\11\11\11\x9\x9\11\x9\x28\142\x61\x73\x65\137\x69\x64\54\x20\40\154\x61\156\147\x75\141\x67\x65\x5f\151\144\54\x20\x20\x74\x69\164\154\145\x2c\40\40\141\144\144\x69\x74\151\157\x6e\x2c\40\40\x63\x6f\156\164\145\x6e\164\51\12\x9\11\x9\x9\11\11\x56\x41\114\125\105\123\xa\11\11\x9\x9\11\11\x9\50\72\x42\101\x53\x45\137\x49\x44\54\40\x3a\x4c\101\x4e\107\125\x41\107\x45\137\x49\x44\54\40\72\124\x49\124\114\x45\54\x20\x3a\101\104\x44\x49\x54\x49\x4f\116\54\40\72\x43\117\x4e\x54\105\x4e\124\x29\xa\x9\11\11\x9"; $create_post_text = $pdo->prepare($sql); $create_post_text->bindValue("\102\101\x53\105\x5f\x49\104", $new_id); $create_post_text->bindValue("\x4c\101\x4e\107\x55\101\x47\x45\137\111\104", $language_id); $create_post_text->bindValue("\124\111\124\x4c\x45", $_POST["\164\x69\x74\154\145"][$language_id]); $create_post_text->bindValue("\x41\x44\x44\x49\x54\111\x4f\x4e", $_POST["\141\144\144\x69\x74\x69\x6f\x6e"][$language_id]); $create_post_text->bindValue("\103\x4f\x4e\x54\x45\x4e\x54", $_POST["\143\157\x6e\x74\145\156\164"][$language_id]); $create_post_text->execute(); unset($create_post_text); } } if (!empty($count_insert) && !empty($_POST["\x69\164\145\x6d\163"])) { $custom_items = array(); $sql = "\x53\105\x4c\105\x43\x54\40\151\144\x2c\x20\x74\x79\x70\x65\x20\x46\x52\x4f\x4d\40{$table_prefix}\143\x75\163\164\x6f\155\137\x69\x74\x65\155\x73\40\x57\x48\105\122\105\40\144\x65\154\145\x74\145\x5f\146\x6c\x67\x20\75\40\60\40\101\x4e\104\x20\x73\164\x61\164\x75\163\x20\75\40\x31"; $read_custom_items = $pdo->prepare($sql); $read_custom_items->execute(); while ($record = $read_custom_items->fetch(PDO::FETCH_ASSOC)) { $custom_items[$record["\x69\144"]] = $record["\164\171\x70\x65"]; } unset($read_custom_items); foreach ($_POST["\x69\x74\x65\x6d\163"] as $custom_item_id => $data) { foreach ($data as $language_id => $value) { if (is_array($value)) { $value = implode("\x2c", $value); } if ($custom_items[$custom_item_id] == "\x69\155\141\x67\x65") { if (!empty($value) && $_SESSION[$session_key]["\x63\x6f\156\146\x69\x67\x73"]["\155\145\144\151\141\137\160\141\x72\x61\x6d\x65\164\145\162\137\146\154\147"]) { if (preg_match($pattern_param, $value)) { $value = preg_replace($pattern_param, '', $value); } $value = $value . "\77\166\x3d" . $media_parameter; } } if ($custom_items[$custom_item_id] == "\x67\x61\154\154\x65\162\x79") { if (!empty($value) && $_SESSION[$session_key]["\143\x6f\x6e\x66\x69\x67\163"]["\x6d\145\144\x69\141\137\x70\141\162\x61\x6d\x65\x74\x65\162\x5f\146\x6c\147"]) { $prepared_data = $str = str_replace(array("\15\xa", "\15", "\12"), "\xa", $value); $separated_data = explode("\12", $prepared_data); $urls_arr = !empty($separated_data[0]) ? explode("\x2c", $separated_data[0]) : array(); $gallery_arr = array(); foreach ($urls_arr as $url_key => $url) { if (preg_match($pattern_param, $url)) { $url = preg_replace($pattern_param, '', $url); } $gallery_arr[$url_key] = $url . "\77\166\75" . $media_parameter; } $value = implode("\54", $gallery_arr); if (!empty($separated_data[1])) { $value .= "\xa" . $separated_data[1]; } } } $sql = "\xa\11\11\11\11\11\x9\x9\x49\116\x53\105\x52\x54\x20\x49\x4e\124\117\40{$table_prefix}\160\x6f\163\164\163\137\143\x75\x73\x74\157\x6d\12\x9\11\11\x9\x9\11\x9\x9\50\x62\x61\163\145\137\151\x64\x2c\x20\40\x6c\x61\156\x67\165\141\147\x65\x5f\151\144\54\40\40\143\x75\163\x74\157\x6d\x5f\151\164\145\155\x5f\151\144\x2c\40\40\166\x61\x6c\x75\x65\x29\12\x9\11\x9\11\x9\x9\11\x56\x41\114\125\105\123\12\x9\11\x9\11\11\x9\11\11\50\72\102\x41\x53\105\x5f\111\x44\54\x20\72\114\101\116\107\125\101\107\105\x5f\111\x44\54\40\72\103\125\x53\x54\117\115\137\111\124\x45\x4d\137\111\x44\x2c\40\x3a\126\x41\114\125\x45\x29\xa\x9\11\11\x9\x9\11"; $create_post_custom = $pdo->prepare($sql); $create_post_custom->bindValue("\x42\101\123\105\137\111\104", $new_id); $create_post_custom->bindValue("\114\x41\x4e\107\125\x41\107\105\x5f\111\x44", $language_id); $create_post_custom->bindValue("\103\x55\x53\x54\x4f\115\x5f\x49\x54\105\115\x5f\x49\104", $custom_item_id); $create_post_custom->bindValue("\126\x41\x4c\x55\105", $value); $create_post_custom->execute(); unset($create_post_custom); } } } resetCacheParams(); $pdo->commit(); } catch (PDOException $e) { $pdo->rollBack(); var_dump($e->getMessage()); die; } $response["\162\145\163\165\154\x74"] = 1; $response["\160\162\x6f\x63\145\x73\163"] = "\143\x72\145\141\x74\x65\144"; $response["\x74\x61\x72\x67\145\x74\137\x69\x64"] = $new_id; $response["\150\141\x73\150\137\x69\x64"] = $hash_id; } goto NcnQJ; ib3eK: if (!empty($_POST["\145\171\145\143\141\x74\x63\x68"]) && $_SESSION[$session_key]["\143\157\x6e\x66\151\x67\x73"]["\x6d\145\x64\x69\141\137\160\141\162\x61\x6d\145\164\x65\162\137\146\154\x67"]) { if (preg_match($pattern_param, $_POST["\x65\171\x65\x63\x61\x74\x63\150"])) { $_POST["\145\x79\145\x63\x61\164\x63\150"] = preg_replace($pattern_param, '', $_POST["\x65\x79\x65\x63\x61\164\143\x68"]); } $eyecatch = $_POST["\x65\x79\x65\x63\141\164\143\x68"] . "\x3f\166\x3d" . $media_parameter; } goto nQPQ9; L344F: $pattern_param = "\57\x5c\x3f\166\x3d\x5c\x64\x7b\61\x34\175\x2f"; goto DFZxE; d0kEt: if (!empty($publish_datetime) && (strtotime($publish_datetime) < strtotime("\61\71\x30\60\x2d\x30\x31\x2d\60\61\x20\60\x30\x3a\60\x30\72\60\60") || !checkDatetime($publish_datetime))) { $publish_datetime = date("\x59\x2d\x6d\55\144\40\x48\72\x69") . "\x3a\x30\x30"; } goto tBhRf; j2zFh: if (!empty($_POST["\x63\157\156\x74\145\156\x74"])) { foreach ($_POST["\143\x6f\156\164\145\x6e\x74"] as $language_id => $value) { if (strstr($value, $target_img)) { $_POST["\143\x6f\156\x74\145\x6e\164"][$language_id] = str_replace($target_img, $replace_img, $value); } if (strstr($value, $target_pdf)) { $_POST["\x63\157\x6e\x74\x65\156\164"][$language_id] = str_replace($target_pdf, $replace_pdf, $value); } } if ($_SESSION[$session_key]["\143\157\156\146\151\x67\163"]["\x6d\145\144\x69\141\137\x70\141\162\x61\x6d\x65\x74\x65\162\x5f\146\x6c\147"]) { foreach ($_POST["\143\157\x6e\164\x65\x6e\x74"] as $language_id => $value) { if (preg_match($pattern_param, $value)) { $_POST["\x63\157\x6e\x74\x65\x6e\164"][$language_id] = preg_replace($pattern_param, '', $value); } } foreach ($operators as $operator => $regex) { foreach ($_POST["\143\157\156\164\x65\156\x74"] as $language_id => $value) { if (preg_match($regex, $value)) { $_POST["\143\157\x6e\x74\145\x6e\164"][$language_id] = preg_replace($regex, $operator . "\77\x76\75" . $media_parameter, $value); } } } } } goto KrL5h; tBhRf: $publish_end_at = !empty($_POST["\x70\x75\x62\x6c\151\x73\x68\137\145\156\144\137\141\164"]) ? $_POST["\160\x75\x62\x6c\x69\x73\150\x5f\145\156\144\137\141\x74"] . "\x3a\60\x30" : null; goto R0ohk; SbN2H: if (empty($publish_datetime) && $_POST["\163\x74\x61\x74\x75\163"] == 1) { $publish_datetime = date("\x59\55\x6d\x2d\144\40\110\72\151") . "\72\x30\60"; } goto OvwpT; nQPQ9: $replace_img = !empty($_SESSION[$session_key]["\143\x6f\156\146\x69\x67\x73"]["\144\x69\162\137\x6e\x61\155\145"]) ? "\x73\162\143\x3d\x22" . $_SESSION[$session_key]["\143\x6f\156\x66\151\x67\163"]["\144\157\155\141\151\x6e"] . "\x2f" . $_SESSION[$session_key]["\143\157\x6e\146\x69\x67\163"]["\x64\151\162\x5f\156\x61\155\145"] . "\57\165\x70\x6c\157\141\144\57\x66\162\x5f\x6d\x61\x69\156\x2f" : "\163\x72\x63\x3d\x22" . $_SESSION[$session_key]["\143\157\156\146\x69\x67\x73"]["\x64\157\x6d\141\x69\x6e"] . "\57\x75\160\x6c\157\141\x64\x2f\146\162\137\155\141\151\x6e\57"; goto YCOh8; NcnQJ: if (!empty($target_id) && !empty($version)) { try { $pdo->beginTransaction(); $children = array(); $sql = "\x53\x45\114\x45\x43\x54\40\x69\144\40\x46\122\117\x4d\x20{$table_prefix}\x70\x6f\163\x74\163\137\x62\x61\163\x65\40\127\110\105\x52\x45\40\x70\x61\x72\x65\156\164\x5f\x69\144\40\74\x3e\40\x30\x20\x41\116\x44\40\x70\x61\x72\x65\156\164\x5f\151\144\x20\75\x20\x3a\x50\x41\122\x45\x4e\124\137\x49\x44\x20\101\x4e\104\40\166\x65\x72\163\151\157\156\x20\x3d\40\72\126\x45\x52\123\111\x4f\x4e"; $search_children = $pdo->prepare($sql); $search_children->bindValue("\x50\x41\x52\x45\x4e\124\137\x49\104", $target_id); $search_children->bindValue("\x56\x45\x52\123\x49\117\x4e", $version); $search_children->execute(); while ($record = $search_children->fetch(PDO::FETCH_ASSOC)) { $children[] = $record["\151\144"]; } $sql = "\12\11\11\x9\11\x55\120\x44\x41\124\x45\x20{$table_prefix}\160\157\163\164\x73\137\x62\141\163\x65\40\123\x45\x54\xa\11\11\x9\11\x9\160\x65\162\x6d\141\x6c\151\x6e\153\x5f\153\x65\x79\x20\40\40\x20\x3d\40\72\120\x45\x52\115\101\114\x49\x4e\x4b\137\113\105\131\54\xa\11\x9\11\11\x9\160\145\162\x6d\141\154\x69\156\153\137\x75\x72\151\40\x20\40\40\x20\x20\40\40\75\40\x3a\120\x45\x52\x4d\x41\x4c\x49\x4e\x4b\137\125\122\111\54\12\x9\11\x9\x9\11\160\x75\142\x6c\151\x73\x68\137\144\x61\x74\145\x74\151\155\145\x20\75\x20\72\x50\x55\x42\x4c\x49\x53\110\x5f\104\x41\124\x45\124\111\115\105\x2c\xa\11\11\11\11\x9\160\165\x62\154\x69\163\x68\137\x65\x6e\144\x5f\141\x74\x20\40\40\75\40\72\120\x55\x42\114\x49\123\x48\x5f\105\x4e\x44\x5f\101\124\54\xa\x9\11\11\x9\11\x73\151\164\145\137\151\x64\40\x20\x20\x20\40\x20\40\40\40\40\x3d\40\x3a\123\x49\124\x45\137\x49\x44\54\xa\x9\x9\x9\x9\x9\160\157\x73\164\x74\171\160\145\137\x69\x64\x20\x20\x20\40\40\x20\x3d\x20\x3a\x50\117\x53\124\124\x59\x50\105\137\111\104\54\12\11\11\x9\11\11\143\141\x74\x65\147\x6f\x72\x79\x5f\x69\144\x20\40\x20\40\40\40\x3d\x20\72\x43\101\124\105\x47\117\122\x59\x5f\111\104\54\xa\11\11\11\x9\11\164\x61\147\137\x69\x64\x20\x20\40\40\40\x20\x20\40\40\x20\40\75\x20\72\124\x41\x47\137\x49\x44\x2c\12\11\x9\11\11\11\163\154\165\x67\x20\40\x20\40\40\40\x20\40\40\x20\x20\x20\x20\x3d\40\72\123\x4c\125\x47\x2c\xa\x9\x9\11\x9\x9\145\x79\x65\143\x61\164\x63\x68\x20\40\40\x20\x20\x20\40\40\40\x3d\40\72\x45\x59\x45\x43\101\124\103\x48\x2c\12\x9\11\x9\11\11\x61\156\143\150\x6f\x72\x20\x20\40\x20\x20\x20\40\40\x20\x20\40\75\40\72\101\116\x43\x48\117\x52\54\12\11\x9\11\11\11\x75\x70\144\x61\164\x65\144\x5f\141\x74\x20\40\40\x20\x20\x20\40\75\40\72\x55\x50\104\x41\x54\x45\x44\137\101\x54\54\xa\11\11\x9\x9\11\165\160\144\141\x74\145\144\x5f\142\x79\40\x20\40\40\40\x20\40\x3d\40\72\125\x50\104\101\x54\105\104\x5f\x42\131\54\12\11\x9\11\x9\11\x73\x74\x61\x74\x75\163\x20\x20\40\x20\40\40\x20\x20\40\x20\40\75\40\x3a\123\x54\x41\124\125\123\12\x9\11\11\11\x57\x48\x45\x52\105\x20\151\144\40\75\40\x3a\111\x44\40\x41\116\104\x20\x76\145\162\163\x69\x6f\x6e\x20\75\x20\x3a\126\x45\x52\123\x49\117\x4e\xa\11\11"; $update_post_base = $pdo->prepare($sql); $update_post_base->bindValue("\x50\105\x52\x4d\101\114\x49\116\x4b\x5f\113\105\x59", $_POST["\160\x65\x72\155\141\x6c\151\156\153\x5f\153\x65\171"]); $update_post_base->bindValue("\120\105\x52\115\x41\x4c\x49\116\113\x5f\125\122\x49", $_POST["\160\145\162\x6d\141\154\x69\156\153\x5f\165\162\151"]); $update_post_base->bindValue("\120\x55\102\114\x49\x53\110\137\104\101\x54\105\124\111\x4d\x45", $publish_datetime); $update_post_base->bindValue("\x50\125\x42\x4c\111\x53\x48\x5f\x45\116\x44\x5f\x41\124", $publish_end_at); $update_post_base->bindValue("\x53\x49\x54\105\137\x49\104", $_POST["\163\151\164\x65\137\x69\x64"]); $update_post_base->bindValue("\120\x4f\123\124\x54\x59\x50\x45\137\111\x44", $_POST["\160\157\163\164\164\171\160\145\x5f\x69\144"]); $update_post_base->bindValue("\103\101\124\105\107\x4f\x52\131\137\111\104", $category_id); $update_post_base->bindValue("\x54\x41\x47\137\111\x44", $tag_id); $update_post_base->bindValue("\123\114\125\107", $slug); $update_post_base->bindValue("\105\131\105\103\x41\x54\x43\x48", $eyecatch); $update_post_base->bindValue("\101\x4e\x43\x48\x4f\122", $_POST["\141\156\x63\150\x6f\162"]); $update_post_base->bindValue("\x55\120\x44\101\x54\x45\104\137\101\124", date("\x59\x2d\155\55\x64\40\x48\x3a\151\72\x73")); $update_post_base->bindValue("\x55\120\x44\x41\x54\105\104\137\102\x59", $_SESSION[$session_key]["\x75\x73\x65\162"]["\x69\144"]); $update_post_base->bindValue("\123\x54\101\x54\125\123", $_POST["\163\164\x61\164\165\x73"]); $update_post_base->bindValue("\x49\x44", $target_id); $update_post_base->bindValue("\126\105\122\x53\111\x4f\116", $version); $update_post_base->execute(); unset($update_post_base); if (!empty($children)) { $sql = "\xa\x9\11\x9\11\x9\125\120\104\x41\124\105\40{$table_prefix}\160\x6f\x73\164\163\x5f\x62\141\x73\145\x20\x53\x45\124\xa\x9\x9\11\x9\11\11\x70\165\x62\x6c\x69\163\150\137\x64\x61\164\x65\164\151\x6d\x65\x20\x3d\x20\72\x50\x55\x42\x4c\111\x53\110\x5f\104\x41\x54\105\x54\111\x4d\105\54\xa\x9\11\11\x9\11\11\160\165\x62\x6c\151\x73\150\x5f\145\x6e\x64\137\141\x74\40\x20\40\x3d\40\72\120\125\102\114\111\123\110\x5f\x45\116\x44\137\101\124\54\12\11\x9\11\11\11\x9\163\151\x74\145\137\x69\144\40\40\40\x20\40\40\40\x20\40\40\75\x20\72\123\111\x54\105\x5f\x49\x44\54\xa\11\11\x9\11\11\x9\160\157\x73\164\164\x79\x70\145\x5f\x69\x64\x20\x20\x20\40\40\x20\75\40\72\120\x4f\123\124\x54\x59\x50\105\x5f\x49\x44\54\xa\11\11\x9\x9\11\x9\143\141\x74\x65\147\157\162\171\x5f\151\144\40\x20\x20\40\x20\x20\x3d\x20\72\x43\x41\x54\105\x47\117\122\x59\x5f\111\x44\54\12\x9\11\x9\x9\11\11\x74\141\x67\x5f\151\144\40\x20\40\40\x20\40\40\40\40\x20\40\75\40\72\124\101\107\137\111\104\54\xa\x9\x9\11\11\x9\x9\141\156\x63\150\x6f\162\40\x20\40\40\40\40\x20\x20\40\40\40\75\40\x3a\x41\x4e\x43\x48\117\122\12\x9\11\x9\11\x9\x57\x48\x45\x52\105\x20\x70\x61\162\x65\156\164\137\x69\144\40\x3d\40\72\x50\101\122\105\116\x54\x5f\111\104\x20\x41\116\104\x20\166\145\162\163\x69\157\156\40\x3d\x20\x3a\x56\105\x52\123\x49\117\116\12\x9\x9\x9"; $update_posts_base = $pdo->prepare($sql); $update_posts_base->bindValue("\x50\125\x42\x4c\x49\123\110\137\104\x41\x54\x45\x54\x49\x4d\x45", $publish_datetime); $update_posts_base->bindValue("\120\125\x42\114\111\123\x48\x5f\x45\116\x44\137\101\x54", $publish_end_at); $update_posts_base->bindValue("\123\x49\124\105\x5f\111\104", $_POST["\163\x69\164\145\137\151\144"]); $update_posts_base->bindValue("\120\117\123\x54\124\x59\120\x45\x5f\111\104", $_POST["\x70\157\163\x74\164\171\160\x65\137\151\x64"]); $update_posts_base->bindValue("\x43\x41\124\105\107\x4f\x52\131\x5f\111\x44", $category_id); $update_posts_base->bindValue("\x54\101\x47\137\x49\104", $tag_id); $update_posts_base->bindValue("\101\116\103\x48\117\122", $_POST["\x61\x6e\143\x68\157\162"]); $update_posts_base->bindValue("\120\101\x52\x45\116\x54\137\x49\104", $target_id); $update_posts_base->bindValue("\126\x45\122\x53\111\117\x4e", $version); $update_posts_base->execute(); unset($update_posts_base); } foreach ($_POST["\164\x69\x74\x6c\x65"] as $language_id => $value) { $sql = "\x53\105\114\105\x43\x54\x20\x43\117\125\116\x54\x28\x62\x61\163\145\137\x69\x64\51\x20\101\x53\x20\x63\157\165\x6e\164\40\106\122\117\115\40{$table_prefix}\x70\157\163\164\x73\x5f\x74\145\170\x74\40\127\110\x45\x52\x45\x20\142\141\x73\145\x5f\151\x64\40\75\40{$target_id}\40\x41\x4e\x44\x20\x62\141\x73\x65\137\166\145\162\x73\x69\x6f\156\x20\75\40{$version}\40\x41\x4e\104\40\154\141\156\x67\x75\x61\x67\145\137\151\x64\40\75\40{$language_id}"; $search_posts_text = $pdo->prepare($sql); $search_posts_text->execute(); if ($posts_text = $search_posts_text->fetch(PDO::FETCH_ASSOC)) { unset($search_posts_text); } if ($posts_text["\143\x6f\165\x6e\x74"]) { $sql = "\12\x9\11\x9\11\x9\x9\125\120\104\x41\x54\x45\40{$table_prefix}\160\157\163\164\x73\137\x74\x65\x78\x74\40\123\105\124\xa\x9\x9\x9\11\11\11\11\x74\151\164\154\x65\40\x20\40\40\75\x20\72\124\111\124\114\105\x2c\xa\11\11\x9\x9\x9\x9\x9\x61\144\144\151\x74\151\x6f\156\40\75\40\72\101\x44\104\x49\124\x49\x4f\x4e\x2c\xa\x9\x9\x9\11\x9\11\11\x63\x6f\156\x74\x65\156\164\40\x20\x3d\x20\72\103\117\116\124\105\116\124\12\x9\x9\x9\x9\11\11\127\110\x45\122\x45\x20\142\x61\163\x65\x5f\x69\x64\40\75\40\x3a\x42\101\123\x45\137\x49\x44\x20\x41\116\104\40\142\x61\163\x65\137\166\145\x72\163\x69\x6f\x6e\40\75\40\x3a\102\x41\x53\105\x5f\126\x45\x52\x53\111\x4f\116\40\101\116\104\40\x6c\141\156\x67\165\x61\147\145\x5f\151\x64\40\75\40\x3a\x4c\101\x4e\x47\x55\101\107\105\x5f\111\x44\xa\11\11\x9\x9"; $update_post_text = $pdo->prepare($sql); $update_post_text->bindValue("\124\111\124\x4c\x45", $_POST["\164\x69\164\x6c\x65"][$language_id]); $update_post_text->bindValue("\x41\x44\x44\x49\124\111\117\x4e", $_POST["\141\144\x64\151\164\151\x6f\x6e"][$language_id]); $update_post_text->bindValue("\103\x4f\116\124\105\x4e\x54", $_POST["\143\x6f\156\164\x65\x6e\x74"][$language_id]); $update_post_text->bindValue("\102\x41\x53\x45\x5f\x49\x44", $target_id); $update_post_text->bindValue("\102\101\x53\105\137\126\105\122\123\111\117\x4e", $version); $update_post_text->bindValue("\114\101\x4e\107\x55\x41\x47\105\137\x49\104", $language_id); $update_post_text->execute(); unset($update_post_text); if (!empty($children)) { foreach ($children as $child_id) { $sql = "\12\11\x9\11\11\11\x9\11\x9\125\x50\x44\x41\x54\105\40{$table_prefix}\160\x6f\163\164\x73\x5f\164\145\x78\164\x20\123\x45\124\xa\x9\11\11\x9\11\x9\11\11\x9\x74\151\164\154\x65\x20\75\x20\x3a\124\x49\x54\x4c\x45\xa\11\x9\11\x9\x9\x9\11\x9\x57\x48\x45\122\x45\40\x62\141\x73\x65\x5f\151\144\x20\x3d\40\x3a\102\101\x53\105\x5f\x49\104\40\101\x4e\104\x20\x62\141\x73\x65\x5f\166\145\162\x73\x69\x6f\x6e\x20\x3d\40\72\x42\x41\x53\105\x5f\x56\105\x52\x53\x49\x4f\116\40\101\x4e\x44\40\x6c\141\x6e\147\x75\141\147\145\x5f\x69\x64\40\x3d\x20\72\x4c\x41\116\107\x55\x41\107\x45\x5f\111\104\12\11\x9\x9\11\x9\11"; $update_post_text = $pdo->prepare($sql); $update_post_text->bindValue("\x54\111\124\x4c\105", $_POST["\x74\151\164\x6c\145"][$language_id]); $update_post_text->bindValue("\x42\x41\123\105\137\111\x44", $child_id); $update_post_text->bindValue("\102\101\123\105\x5f\126\105\122\123\x49\x4f\x4e", $version); $update_post_text->bindValue("\x4c\x41\116\x47\x55\101\107\x45\x5f\x49\104", $language_id); $update_post_text->execute(); unset($update_post_text); } } } else { $sql = "\12\x9\x9\11\11\11\x9\111\116\123\105\122\124\40\111\x4e\124\x4f\40{$table_prefix}\x70\x6f\163\x74\163\137\164\x65\x78\x74\xa\11\11\11\11\x9\11\11\50\40\142\x61\163\x65\x5f\151\144\x2c\x20\x20\142\141\163\145\x5f\166\145\162\163\151\157\156\x2c\40\40\x6c\141\156\x67\x75\x61\x67\145\x5f\151\144\x2c\40\40\164\151\x74\154\x65\54\40\x20\141\x64\144\x69\x74\x69\157\156\x2c\40\x20\x63\x6f\156\164\x65\156\164\x29\12\11\11\x9\11\11\11\x56\x41\x4c\x55\x45\123\xa\x9\x9\x9\x9\11\x9\x9\50\x3a\x42\101\x53\105\137\x49\104\54\40\x3a\x42\101\x53\x45\137\x56\x45\x52\x53\111\117\x4e\x2c\40\x3a\x4c\x41\116\107\125\101\107\105\x5f\x49\x44\54\40\x3a\124\111\124\x4c\105\54\x20\x3a\x41\104\x44\x49\124\x49\x4f\x4e\54\x20\x3a\103\x4f\116\124\105\116\x54\51\12\11\x9\11\x9"; $create_post_text = $pdo->prepare($sql); $create_post_text->bindValue("\102\x41\123\105\x5f\x49\x44", $target_id); $create_post_text->bindValue("\x42\101\123\105\x5f\126\x45\x52\x53\111\117\x4e", $version); $create_post_text->bindValue("\114\x41\116\107\125\101\x47\105\x5f\x49\x44", $language_id); $create_post_text->bindValue("\x54\x49\x54\114\x45", $_POST["\164\x69\x74\x6c\145"][$language_id]); $create_post_text->bindValue("\101\104\x44\111\124\111\117\x4e", $_POST["\141\144\144\151\164\x69\x6f\x6e"][$language_id]); $create_post_text->bindValue("\x43\x4f\116\x54\x45\x4e\124", $_POST["\143\157\x6e\164\x65\x6e\164"][$language_id]); $create_post_text->execute(); unset($create_post_text); if (!empty($children)) { foreach ($children as $child_id) { $sql = "\12\x9\x9\x9\11\11\x9\x9\x9\x49\x4e\123\x45\122\124\x20\111\116\124\x4f\40{$table_prefix}\x70\x6f\x73\164\x73\137\164\x65\x78\164\12\x9\11\x9\x9\11\11\11\11\11\50\40\142\141\x73\145\x5f\151\144\54\x20\x20\x62\x61\163\145\137\x76\x65\162\x73\151\157\x6e\54\x20\x20\154\141\156\147\x75\141\147\145\137\x69\144\x2c\40\40\x74\151\164\154\x65\x29\xa\11\x9\11\11\11\11\x9\x9\x56\101\x4c\125\x45\x53\xa\11\11\x9\11\11\11\x9\11\x9\x28\x3a\x42\101\123\x45\x5f\111\x44\54\x20\72\102\x41\x53\105\137\x56\x45\122\123\x49\x4f\116\x2c\x20\x3a\x4c\101\116\107\x55\101\x47\105\137\x49\x44\x2c\x20\72\x54\x49\x54\x4c\105\51\xa\x9\x9\11\11\x9\11"; $create_post_text = $pdo->prepare($sql); $create_post_text->bindValue("\x42\101\123\x45\137\x49\104", $child_id); $create_post_text->bindValue("\x42\101\x53\x45\137\126\105\x52\x53\111\117\x4e", $version); $create_post_text->bindValue("\114\101\x4e\x47\125\x41\x47\105\137\111\104", $language_id); $create_post_text->bindValue("\124\x49\x54\x4c\105", $_POST["\164\x69\164\x6c\145"][$language_id]); $create_post_text->execute(); unset($create_post_text); } } } } if (!empty($_POST["\x69\164\x65\155\x73"])) { $custom_items = array(); $sql = "\x53\105\114\x45\x43\124\x20\151\144\x2c\40\164\171\160\145\40\106\x52\x4f\115\40{$table_prefix}\143\165\x73\164\x6f\155\x5f\151\x74\x65\x6d\x73\x20\127\x48\105\122\105\40\x64\145\154\x65\164\145\137\146\154\147\x20\75\x20\x30\x20\101\116\104\40\x73\x74\141\164\x75\163\x20\x3d\x20\61"; $read_custom_items = $pdo->prepare($sql); $read_custom_items->execute(); while ($record = $read_custom_items->fetch(PDO::FETCH_ASSOC)) { $custom_items[$record["\x69\x64"]] = $record["\x74\171\x70\145"]; } unset($read_custom_items); foreach ($_POST["\x69\164\x65\155\163"] as $custom_item_id => $data) { foreach ($data as $language_id => $value) { if (is_array($value)) { $value = implode("\x2c", $value); } if ($custom_items[$custom_item_id] == "\151\155\x61\x67\x65") { if (!empty($value) && $_SESSION[$session_key]["\x63\157\156\x66\x69\147\163"]["\x6d\x65\x64\x69\141\x5f\160\141\162\x61\x6d\145\x74\x65\x72\x5f\146\154\147"]) { if (preg_match($pattern_param, $value)) { $value = preg_replace($pattern_param, '', $value); } $value = $value . "\77\166\75" . $media_parameter; } } if ($custom_items[$custom_item_id] == "\x67\141\x6c\x6c\145\x72\171") { if (!empty($value) && $_SESSION[$session_key]["\143\157\156\x66\151\x67\163"]["\x6d\145\x64\x69\x61\137\x70\141\162\x61\x6d\x65\164\x65\162\137\146\154\147"]) { $prepared_data = $str = str_replace(array("\15\12", "\15", "\xa"), "\xa", $value); $separated_data = explode("\12", $prepared_data); $urls_arr = !empty($separated_data[0]) ? explode("\54", $separated_data[0]) : array(); $gallery_arr = array(); foreach ($urls_arr as $url_key => $url) { if (preg_match($pattern_param, $url)) { $url = preg_replace($pattern_param, '', $url); } $gallery_arr[$url_key] = $url . "\x3f\166\75" . $media_parameter; } $value = implode("\54", $gallery_arr); if (!empty($separated_data[1])) { $value .= "\xa" . $separated_data[1]; } } } $sql = "\12\11\11\x9\x9\11\x9\11\123\x45\114\105\x43\x54\40\103\117\x55\x4e\124\50\x62\x61\163\x65\x5f\x69\144\51\40\101\x53\40\143\x6f\165\156\x74\12\x9\x9\11\11\x9\11\x9\x46\122\117\x4d\x20{$table_prefix}\x70\x6f\x73\164\x73\x5f\143\165\x73\164\157\x6d\12\x9\11\11\11\x9\x9\11\x57\110\x45\x52\x45\xa\11\11\11\11\x9\x9\x9\11\142\141\x73\145\x5f\x69\x64\40\x3d\x20{$target_id}\xa\x9\x9\x9\11\11\x9\11\x9\101\116\x44\40\142\141\x73\145\137\166\x65\162\163\x69\157\x6e\40\75\40{$version}\12\11\x9\11\x9\x9\11\11\11\x41\x4e\x44\40\x6c\x61\156\x67\165\141\x67\145\x5f\151\144\x20\75\x20{$language_id}\xa\11\x9\x9\11\11\x9\x9\x9\x41\116\x44\x20\x63\x75\x73\164\157\155\x5f\151\164\x65\155\x5f\x69\144\40\x3d\40{$custom_item_id}\xa\11\x9\x9\x9\x9"; $search_posts_custom = $pdo->prepare($sql); $search_posts_custom->execute(); if ($posts_custom = $search_posts_custom->fetch(PDO::FETCH_ASSOC)) { unset($search_posts_custom); } if ($posts_custom["\x63\157\165\x6e\164"]) { $sql = "\xa\x9\11\11\x9\x9\11\x9\11\x55\x50\x44\101\124\105\40{$table_prefix}\160\x6f\163\164\163\137\x63\x75\x73\164\157\x6d\40\x53\105\124\12\x9\x9\x9\x9\11\11\x9\x9\11\x76\x61\154\165\145\40\x3d\40\x3a\x56\x41\114\125\105\xa\11\11\11\x9\x9\11\x9\11\x57\x48\105\122\x45\12\11\11\11\x9\x9\x9\11\x9\x9\x62\x61\x73\x65\137\151\x64\x20\x3d\40\72\x42\x41\x53\105\137\111\104\xa\11\11\11\x9\11\x9\11\11\x9\101\x4e\x44\40\154\141\156\x67\165\141\x67\145\137\151\144\x20\75\40\72\x4c\101\116\107\125\x41\107\105\x5f\111\x44\12\11\11\11\x9\x9\x9\11\11\x9\101\x4e\104\x20\142\141\x73\145\137\x76\145\162\163\x69\157\x6e\x20\x3d\40\x3a\x42\x41\123\105\x5f\126\x45\122\x53\111\117\116\12\11\x9\x9\11\x9\11\x9\11\11\x41\116\104\40\143\165\x73\164\x6f\x6d\137\151\164\145\155\x5f\151\144\x20\x3d\40\72\103\125\x53\124\117\115\137\111\124\105\x4d\137\x49\x44\12\x9\11\11\x9\x9\11"; $update_post_custom = $pdo->prepare($sql); $update_post_custom->bindValue("\126\x41\114\125\105", $value); $update_post_custom->bindValue("\x42\101\123\105\137\x49\x44", $target_id); $update_post_custom->bindValue("\x42\x41\123\105\x5f\126\x45\122\x53\x49\x4f\x4e", $version); $update_post_custom->bindValue("\x4c\x41\x4e\x47\x55\101\x47\x45\137\x49\104", $language_id); $update_post_custom->bindValue("\x43\x55\123\x54\x4f\115\x5f\111\x54\105\x4d\137\x49\104", $custom_item_id); $update_post_custom->execute(); unset($update_post_custom); } else { $sql = "\12\x9\x9\11\11\11\x9\11\11\111\116\123\105\122\x54\x20\111\116\124\x4f\x20{$table_prefix}\x70\157\x73\x74\163\x5f\143\x75\163\x74\x6f\155\12\x9\11\11\11\11\x9\x9\x9\11\50\x20\x62\141\x73\x65\137\x69\144\54\x20\40\x62\x61\163\145\x5f\x76\145\x72\x73\x69\x6f\156\x2c\x20\40\x6c\141\x6e\x67\165\141\x67\145\x5f\151\144\54\40\40\143\x75\x73\x74\157\155\137\x69\x74\145\155\137\x69\x64\54\x20\x20\166\141\x6c\165\x65\51\12\x9\x9\11\11\11\x9\11\11\x56\101\114\125\x45\x53\xa\11\x9\x9\x9\x9\11\x9\x9\x9\50\72\x42\x41\123\105\137\x49\x44\54\x20\x3a\102\101\123\x45\137\x56\x45\122\123\111\x4f\116\x2c\40\72\114\x41\x4e\107\x55\101\x47\x45\x5f\111\104\54\x20\72\103\x55\123\x54\x4f\115\137\111\x54\x45\x4d\137\x49\104\x2c\x20\72\126\101\x4c\x55\105\x29\xa\11\x9\11\x9\x9\11"; $create_post_custom = $pdo->prepare($sql); $create_post_custom->bindValue("\102\101\123\x45\x5f\111\104", $target_id); $create_post_custom->bindValue("\102\x41\123\105\137\126\105\x52\123\x49\x4f\116", $version); $create_post_custom->bindValue("\114\x41\x4e\107\x55\101\x47\x45\137\x49\x44", $language_id); $create_post_custom->bindValue("\103\x55\123\124\x4f\115\137\x49\124\105\x4d\x5f\x49\x44", $custom_item_id); $create_post_custom->bindValue("\126\x41\x4c\125\x45", $value); $create_post_custom->execute(); unset($create_post_custom); } } } } if ($_POST["\x66\x6f\162\x6d\x65\x72\137\163\164\141\x74\x75\x73"] == 1 || $_POST["\x73\164\141\x74\165\x73"] == 1) { resetCacheParams(); } $pdo->commit(); } catch (PDOException $e) { $pdo->rollBack(); var_dump($e->getMessage()); die; } $response["\162\145\163\x75\x6c\x74"] = 1; $response["\x70\x72\x6f\143\x65\x73\x73"] = "\x75\x70\144\x61\164\x65\144"; } goto m9OsA; IArN1: if (!empty($_POST["\x74\141\x67\x73"])) { foreach ($_POST["\x74\x61\147\x73"] as $value) { $posted_tags[] = sprintf("\45\60\64\x64", $value); } $tag_id = implode("\54", $posted_tags); } goto kxi5u; YCOh8: $replace_pdf = !empty($_SESSION[$session_key]["\143\x6f\x6e\x66\x69\x67\163"]["\144\151\x72\x5f\156\x61\155\x65"]) ? "\x68\x72\145\x66\75\x22" . $_SESSION[$session_key]["\143\x6f\156\x66\x69\147\163"]["\144\157\x6d\141\x69\156"] . "\57" . $_SESSION[$session_key]["\x63\x6f\156\146\x69\147\163"]["\144\151\162\x5f\x6e\141\x6d\145"] . "\x2f\x75\x70\x6c\157\x61\x64\x2f\146\162\137\155\141\x69\156\x2f" : "\150\162\x65\x66\75\x22" . $_SESSION[$session_key]["\x63\157\x6e\146\x69\147\x73"]["\x64\x6f\155\141\x69\156"] . "\x2f\165\x70\154\157\x61\x64\57\x66\162\x5f\155\141\151\156\x2f"; goto he6nn; DFZxE: $publish_datetime = !empty($_POST["\160\x75\x62\154\151\x73\150\x5f\x64\x61\164\x65\x74\151\155\145"]) ? $_POST["\x70\x75\142\154\x69\x73\150\x5f\144\x61\164\x65\x74\x69\155\145"] . "\72\x30\60" : null; goto d0kEt; UXoRd: $media_parameter = date("\x59\x6d\144\110\151\x73"); goto L344F; OvwpT: $category_id = "\60\x30\x30\60"; goto rid3n; zTm0L: $target_pdf = "\150\162\145\x66\75\x22\165\x70\154\157\x61\x64\57\x66\x72\137\x6d\x61\x69\x6e\57"; goto j2zFh; he6nn: $target_img = "\163\x72\x63\x3d\x22\x75\x70\154\157\x61\144\x2f\146\x72\x5f\155\x61\151\x6e\x2f"; goto zTm0L; AZz3Y: $tag_id = "\x30\x30\60\60"; goto IArN1; N2G_S: $response["\x72\145\163\x75\154\164"] = 0; goto BH90B; BH90B: $target_id = !empty($_POST["\164\x61\x72\147\x65\164\137\x69\144"]) ? $_POST["\x74\141\x72\x67\x65\164\137\x69\x64"] : 0; goto nAVnd; m9OsA: if ($php_version < 5.2) { $json = new Jsphon(); echo $json->encode($response); } else { echo json_encode($response); }