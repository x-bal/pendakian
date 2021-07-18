<?php

function block()
{
    $ci = get_instance();

    $id = $ci->session->userdata('id_admin');

    if (!$id) {
        redirect(base_url());
    }
}