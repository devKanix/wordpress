<?php
/**
 * Template Name: Contact Messages
 */

get_header();

// Database connection (WordPress way)
global $wpdb;
$table_name = $wpdb->prefix . 'contact_messages'; // wp_contact_messages

// Fetch all messages
$messages = $wpdb->get_results("SELECT * FROM $table_name");

?>

<div class="contact-messages">
    <h2>Contact Form Messages</h2>

    <?php if (!empty($messages)) : ?>
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messages as $msg) : ?>
                    <tr>
                        <td><?= $msg->id; ?></td>
                        <td><?= $msg->email; ?></td>
                        <td><?= $msg->message; ?></td>
                        <td><?= $msg->created_at; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>No messages found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
