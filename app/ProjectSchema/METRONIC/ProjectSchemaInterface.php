<?php


namespace App\ProjectSchema\METRONIC;

interface ProjectSchemaInterface
{
    function build($content, $replace_schema);
    function getSchema();
}
