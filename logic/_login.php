<?php
 goto k0Lx0; k0Lx0: $cookie_expiration = 2592000; goto IA70X; BhpC3: $account = isset($_POST["\141\x63\143\157\x75\x6e\x74"]) ? htmlspecialchars($_POST["\141\x63\x63\x6f\165\156\x74"], ENT_QUOTES) : null; goto CmXay; fR5to: if (!empty($_GET["\154\x61\156\147"])) { $_SESSION[$session_key]["\165\163\x65\162"]["\x6c\x61\156\x67"] = $_GET["\154\x61\156\147"]; setcookie("\154\141\x6e\147", $_GET["\x6c\141\x6e\147"], time() + $cookie_expiration); header("\114\x6f\x63\141\164\x69\157\156\x3a\40\56\x2f\77\x76\151\145\167\x5f\160\x61\x67\x65\75\x6c\157\147\151\x6e"); } goto PBKZk; IA70X: $method = "\x41\105\x53\x2d\x32\65\x36\x2d\103\x42\103"; goto yxhbB; m4KeM: if (!empty($_SESSION[$session_key]["\x75\163\x65\162"]["\154\x61\156\147"])) { $_SESSION[$session_key]["\143\x6f\156\146\x69\x67\x73"]["\x6c\x61\x6e\x67\x75\x61\x67\145"] = $_SESSION[$session_key]["\165\x73\145\162"]["\x6c\x61\156\147"]; setcookie("\154\141\156\x67", $_SESSION[$session_key]["\x75\x73\145\162"]["\154\x61\156\147"], time() + $cookie_expiration); } goto fR5to; TES2O: $page_sub = null; goto rayhM; CmXay: $password = isset($_POST["\160\141\x73\x73\x77\157\162\x64"]) ? htmlspecialchars($_POST["\160\x61\163\x73\167\157\162\144"], ENT_QUOTES) : null; goto ksVvf; cNShr: try { $sql = "\123\x45\114\x45\x43\124\40\x2a\40\106\x52\x4f\x4d\x20{$table_prefix}\143\157\x6e\x66\151\x67\x73"; $read_records = $pdo->prepare($sql); $read_records->execute(); while ($record = $read_records->fetch(PDO::FETCH_ASSOC)) { $configs[$record["\x69\164\145\x6d"]] = $record["\x76\141\x6c\165\x65"]; } unset($read_records); $_SESSION[$session_key]["\x63\x6f\156\146\x69\147\x73"] = $configs; if (empty($_SESSION[$session_key]["\x75\163\145\x72"]["\x6c\x61\x6e\147"])) { $_SESSION[$session_key]["\x75\163\x65\x72"]["\x6c\x61\x6e\147"] = $_SESSION[$session_key]["\x63\157\156\x66\151\147\163"]["\154\141\x6e\147\165\x61\147\x65"]; } } catch (PDOException $e) { var_dump($e->getMessage()); } goto CqWfU; rayhM: $_SESSION[$session_key]["\x75\163\145\162"]["\154\x61\x6e\x67"] = empty($_GET["\x6c\141\x6e\x67"]) ? empty($_COOKIE["\x6c\141\156\x67"]) ? empty($_SESSION[$session_key]["\165\x73\145\162"]["\154\x61\x6e\x67"]) ? null : $_SESSION[$session_key]["\x75\x73\145\x72"]["\154\x61\x6e\x67"] : $_COOKIE["\154\141\x6e\x67"] : $_GET["\154\x61\x6e\147"]; goto m4KeM; Qu01Y: $disp_password = isset($_COOKIE["\160\141\x73\163\167\157\162\x64"]) && !isset($_POST["\x70\141\163\163\167\x6f\162\x64"]) ? $php_version >= 5.3 ? openssl_decrypt($_COOKIE["\x70\141\x73\x73\x77\x6f\162\144"], $method, $encrypt_key, true, $iv) : $_COOKIE["\160\141\163\x73\x77\x6f\x72\x64"] : null; goto oW9b5; oW9b5: $disp_remember_me = $_SESSION[$session_key]["\162\145\x6d\x65\155\x62\x65\x72\137\155\145"] = !isset($_POST["\x72\145\x6d\x65\155\x62\145\x72\x5f\x6d\145"]) ? empty($_SESSION[$session_key]["\162\x65\x6d\x65\155\x62\145\x72\137\x6d\145"]) ? empty($_COOKIE["\x72\145\x6d\x65\155\x62\x65\x72\137\x6d\x65"]) ? 0 : $_COOKIE["\162\145\x6d\x65\x6d\142\145\162\137\155\145"] : $_SESSION[$session_key]["\162\x65\155\145\x6d\142\x65\x72\x5f\x6d\145"] : $_POST["\x72\145\x6d\x65\155\142\145\x72\x5f\155\145"]; goto BhpC3; TTg3e: $msg = null; goto TRf5x; CqWfU: $disp_account = $_SESSION[$session_key]["\165\x73\x65\162"]["\x61\x63\x63\157\165\x6e\164"] = !isset($_POST["\x61\143\143\157\x75\x6e\164"]) ? empty($_SESSION[$session_key]["\165\x73\x65\162"]["\141\x63\x63\x6f\165\x6e\164"]) ? empty($_COOKIE["\141\143\x63\157\165\x6e\x74"]) ? null : $_COOKIE["\x61\143\x63\x6f\x75\156\x74"] : $_SESSION[$session_key]["\x75\x73\x65\162"]["\141\x63\143\157\x75\x6e\164"] : $_POST["\141\143\143\157\165\x6e\x74"]; goto Qu01Y; piU77: $iv = "\160\157\x73\x74\145\141\163\x65\151\163\145\x61\x73\151\145\x72"; goto YVA4l; sckXT: $status = isset($_GET["\163\x74\x61\x74\x75\163"]) ? $_GET["\163\164\x61\164\165\x73"] : null; goto TTg3e; yxhbB: $encrypt_key = "\x61\x72\153\170\x67\70\x6c\163\71"; goto piU77; TRf5x: if (!empty($status)) { switch ($status) { case 8: $msg = TXT_LOGIN_WAR_IP; break; case 9: $msg = TXT_LOGIN_WAR_SESSION; break; } } goto hpnaR; PBKZk: $configs = array(); goto cNShr; ksVvf: $remember_me = isset($_POST["\x72\x65\x6d\x65\155\142\145\x72\x5f\x6d\145"]) ? $_POST["\x72\x65\155\145\x6d\x62\145\162\137\155\x65"] : 0; goto sckXT; YVA4l: $page_main = "\154\x6f\147\x69\156"; goto TES2O; hpnaR: if (!empty($account) && !empty($password)) { try { $sql = "\x53\x45\114\x45\x43\x54\x20\x2a\40\x46\122\117\115\40{$table_prefix}\x75\x73\x65\x72\x73\x20\x57\110\105\x52\105\x20\144\145\154\145\164\x65\x5f\x66\154\147\x20\75\40\x30\40\101\x4e\x44\x20\x61\143\143\157\x75\x6e\x74\40\x3d\x20\x3a\x41\103\103\117\x55\116\x54"; $read_user = $pdo->prepare($sql); $read_user->bindValue("\101\x43\x43\x4f\x55\x4e\124", $account); $read_user->execute(); if ($user = $read_user->fetch(PDO::FETCH_ASSOC)) { unset($read_user); if (crypt($password, $user["\x70\x61\163\x73\167\x6f\162\x64"]) === $user["\160\141\x73\x73\x77\157\x72\x64"]) { $_SESSION[$session_key]["\165\x73\x65\162"]["\x69\144"] = $user["\151\x64"]; $_SESSION[$session_key]["\x75\x73\x65\x72"]["\x61\143\x63\157\165\156\x74"] = $account; $_SESSION[$session_key]["\165\x73\x65\162"]["\156\151\x63\153\156\x61\x6d\x65"] = $user["\x6e\151\x63\153\156\x61\155\x65"]; $_SESSION[$session_key]["\x75\163\145\162"]["\x72\x6f\154\x65"] = $user["\x72\x6f\x6c\x65"]; $_SESSION[$session_key]["\x75\163\x65\162"]["\154\157\x67\x69\156\x5f\x74\x69\x6d\x65"] = date("\x59\55\155\55\144\40\110\72\x69\x3a\155"); $_SESSION[$session_key]["\165\x73\145\162"]["\143\150\x65\143\153\145\144\x5f\164\151\155\145"] = date("\131\55\155\55\144\x20\110\72\151\72\155"); unset($_SESSION[$session_key]["\162\145\155\145\155\142\145\162\x5f\155\x65"]); $password_for_cookie = $php_version >= 5.3 ? openssl_encrypt($password, $method, $encrypt_key, true, $iv) : $password; if ($remember_me == 1) { setcookie("\141\143\143\x6f\165\156\x74", $account, time() + $cookie_expiration); setcookie("\x70\141\163\x73\167\157\162\x64", $password_for_cookie, time() + $cookie_expiration); setcookie("\162\x65\155\145\155\x62\x65\162\137\155\x65", $remember_me, time() + $cookie_expiration); } else { setcookie("\141\143\x63\x6f\x75\x6e\164", $account, time() - $cookie_expiration); setcookie("\160\x61\163\163\167\157\x72\x64", $password_for_cookie, time() - $cookie_expiration); setcookie("\162\145\x6d\x65\x6d\x62\145\162\137\155\x65", $remember_me, time() - $cookie_expiration); } header("\114\157\x63\141\x74\151\157\156\72\x20\x2e\57\77\166\151\145\167\137\x70\x61\x67\x65\75\165\160\144\x61\164\145\x26\165\x70\x64\141\x74\x65\137\155\157\144\145\x3d\x31"); } } $msg = TXT_LOGIN_WAR_LOGIN; $disp_password = null; $disp_password = null; } catch (PDOException $e) { $read_error = 1; header("\114\x6f\x63\x61\164\x69\157\156\x3a\x20\56\57\x65\x72\162\157\162\x2e\160\x68\160\x3f\x70\x61\x67\x65\x3d{$page}\x26\x72\x65\x61\144\137\145\x72\162\x6f\x72\x3d{$read_error}"); die; } }