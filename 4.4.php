<?php

function contains_only_letters_and_whitespace($str) {
    return preg_match('/^[a-zA-Z\s]+$/', $str);
  }