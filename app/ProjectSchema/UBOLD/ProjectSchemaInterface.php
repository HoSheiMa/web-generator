<?php


namespace App\ProjectSchema\UBOLD;

interface ProjectSchemaInterface
{
    function build($content, $replace_schema);
    function getSchema();
}
