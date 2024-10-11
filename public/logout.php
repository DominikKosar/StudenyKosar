<?php
session_destroy();
echo "<a href="."{{ path('test') }}"." . >Go on page to login</a>";