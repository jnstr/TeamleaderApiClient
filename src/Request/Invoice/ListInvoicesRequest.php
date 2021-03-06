<?php

namespace Nascom\TeamleaderApiClient\Request\Invoice;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListInvoicesRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoice
 */
class ListInvoicesRequest extends AbstractPostRequest
{
    /**
     * ListInvoicesRequest constructor.
     *
     * @param $date_from
     * @param $date_to
     * @param array $options
     *   Optional parameters:
     *   - contact_or_company
     *   - contact_or_company_id
     *   - deep_search
     *   - selected_customfields
     */
    public function __construct($date_from, $date_to, array $options = [])
    {
        $this->options = $options;
        $this->setDateFrom($date_from);
        $this->setDateTo($date_to);
    }

    /**
     * @param $date_from
     */
    public function setDateFrom($date_from)
    {
        $this->options['date_from'] = $date_from;
    }

    /**
     * @param $date_to
     */
    public function setDateTo($date_to)
    {
        $this->options['date_to'] = $date_to;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getInvoices.php';
    }
}
