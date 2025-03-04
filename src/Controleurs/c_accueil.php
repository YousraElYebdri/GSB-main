<?php

/**
 * Gestion de l'accueil
 *
 * PHP Version 8
 *
 * @category  PPE
 * @package   GSB
 * @author    Réseau CERTA <contact@reseaucerta.org>
 * @author    José GIL <jgil@ac-nice.fr>
 * @copyright 2017 Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */


if ($estConnecte) {
    if ($_SESSION['role'] == 1) {
        include_once PATH_VIEWS . 'v_entete.php';
        include PATH_VIEWS . 'comptable/v_accueil.php';
    } else {
        include_once PATH_VIEWS . 'v_entete.php';
        include PATH_VIEWS . 'v_accueil.php';
    }
} else {
    include PATH_VIEWS . 'v_connexion.php';
}
