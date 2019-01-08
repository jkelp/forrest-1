<?php

namespace Omniphx\Forrest\Formatters;

use Omniphx\Forrest\Interfaces\FormatterInterface;

class CSVFormatter implements FormatterInterface
{
    public function setHeaders()
    {
        $headers['Accept'] = 'application/json';
        $headers['Content-Type'] = 'text/csv';

        return $headers;
    }

    public function setBody($data)
    {
        return $data;
    }

    public function formatResponse($response)
    {
        return json_decode($response->getBody(), true);
    }
}
