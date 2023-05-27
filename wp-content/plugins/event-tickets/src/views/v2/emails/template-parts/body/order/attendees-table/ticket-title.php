<?php
/**
 * Event Tickets Emails: Order Attendee Ticket Title
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/tickets/v2/emails/template-parts/body/order/attendees-table/ticket-title.php
 *
 * See more documentation about our views templating system.
 *
 * @link https://evnt.is/tickets-emails-tpl Help article for Tickets Emails template files.
 *
 * @version 5.5.11
 *
 * @since 5.5.11
 *
 * @var Tribe_Template  $this  Current template object.
 * @var array            $order                 [Global] The order object.
 * @var bool             $is_tec_active         [Global] Whether `The Events Calendar` is active or not.
 */

if ( empty( $attendee['ticket_title'] ) ) {
	return;
}

?>
<td class="tec-tickets__email-table-content-order-attendee-info tec-tickets__email-table-content-align-center" align="center">
	<?php echo esc_html( $attendee['ticket_title'] ); ?>
</td>
