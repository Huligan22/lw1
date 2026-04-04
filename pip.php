<?php
$num = 56;

if ((string)$num === strrev((string)$num)) {
    echo "$num — приснилась бабочка";
} else {
    echo "$num — не снилась бабочка";
}