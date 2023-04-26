<?php

namespace Project\DesignPattern;

class GenerateOrderHandler
{
    public function __construct(/* OrderRepository, MailService */)
    {
    }

    public function execute(GenerateOrder $generateOrder)
    {
        $budget = new Budget();
        $budget->amount = $generateOrder->itemAmount;
        $budget->value = $generateOrder->budgetValue;

        $order = new Order();
        $order->endingDate = new \DateTimeImmutable();
        $order->clientName = $generateOrder->clientName;
        $order->budget = $budget;

        echo "Create order on database " . PHP_EOL;
        echo "Send mail to the client " . PHP_EOL;
    }
}