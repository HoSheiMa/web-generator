<?php


namespace App\ProjectSchema;

interface ProjectSchemaInterface
{
    function build($content, $replace_schema);
    function getSchema();
}
