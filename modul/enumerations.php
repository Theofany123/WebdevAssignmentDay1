<?php
enum InvoiceStatus
{
    case Sent;
    case Paid;
    case Cancelled;
}

function printInvoiceStatus(InvoiceStatus $status) {
    echo $status->name;
}
printInvoiceStatus(InvoiceStatus::Sent);
