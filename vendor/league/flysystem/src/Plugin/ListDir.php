<?php

namespace League\Flysystem\Plugin;

class ListDir extends AbstractPlugin
{
    /**
     * Get the method name.
     *
     * @return string
     */
    public function getMethod()
    {
        return 'listDir';
    }

    /**
     * List all files in the directory.
     *
     * @param string $directory
     * @param bool $recursive
     *
     * @return array
     */
    public function handle($directory = '', $recursive = false)
    {
        $contents = $this->filesystem->listContents($directory, $recursive);

        $filter = function ($object) {
            return $object['type'] === 'dir';
        };
        return array_column(array_filter($contents, $filter), "path");
    }
}
