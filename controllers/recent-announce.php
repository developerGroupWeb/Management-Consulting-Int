<?php

$latest = $announces->latest('announces', 'ORDER BY created_at DESC', 4);
