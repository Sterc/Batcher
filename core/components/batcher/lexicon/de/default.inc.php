<?php
/**
 * Batcher
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * This file is part of Batcher, a batch resource editing Extra.
 *
 * Batcher is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Batcher is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Batcher; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package batcher
 */
/**
 * Default German language translation
 *
 * @package batcher
 * @subpackage lexicon
 * @language de
 */
$_lang['batcher'] = 'Batcher';
$_lang['batcher.action_err_ns'] = 'Bitte wählen Sie eine Aktion.';
$_lang['batcher.and_others'] = 'und [[+count]] weitere...';
$_lang['batcher.bulk_actions'] = 'Stapel-Aktionen';
$_lang['batcher.cacheable'] = 'Cache aktiv';
$_lang['batcher.category'] = 'Kategorie';
$_lang['batcher.category_err_ns'] = 'Kategorie nicht angegeben.';
$_lang['batcher.category_err_nf'] = 'Kategorie mit der ID [[+id]] nicht gefunden';
$_lang['batcher.change_authors'] = 'Autoren ändern';
$_lang['batcher.change_category'] = 'Kategorie ändern';
$_lang['batcher.change_dates'] = 'Daten ändern';
$_lang['batcher.change_default_tv_values'] = 'TV-Standardwerte ändern';
$_lang['batcher.change_tv_values'] = 'TV-Werte ändern';
$_lang['batcher.change_parent'] = 'Eltern-Ressource ändern';
$_lang['batcher.change_template'] = 'Template ändern';
$_lang['batcher.createdby'] = 'Erstellt von';
$_lang['batcher.createdon'] = 'Erstellt am';
$_lang['batcher.deleted'] = 'Gelöscht';
$_lang['batcher.editedby'] = 'Bearbeitet von';
$_lang['batcher.editedon'] = 'Bearbeitet am';
$_lang['batcher.filter_by_status'] = 'Nach Status filtern';
$_lang['batcher.filter_by_template'] = 'Nach Template filtern';
$_lang['batcher.filter_by_context'] = 'Nach Kontext filtern';
$_lang['batcher.filter.field'] = 'Feld';
$_lang['batcher.filter.type'] = 'Operator';
$_lang['batcher.filter.value'] = 'Wert';
$_lang['batcher.filter.clear'] = 'Filter zurücksetzen';
$_lang['batcher.filter.advanced'] = 'Erweiterter Filter';
$_lang['batcher.filter.advanced.desc'] = 'Der erweiterte Filter erlaubt Ihnen, nach allen Ressourcen-Feldern mit benutzerdefinierten Operatoren zu filtern.<br>
Für die Operatoren `IN` und `BETWEEN` müssen die Werte kommasepariert angegeben werden, und für den `LIKE`-Operator können Sie den Platzhalter `%` verwenden.<br><br>
<b>Beispiele:</b><br>
Feld: `id` - Operator: `BETWEEN` - Wert: `1,5` listet Ressourcen mit IDs zwischen 1 und 5 auf.<br>
Feld: `id` - Operator: `IN` - Wert: `1,3,6` listet Ressourcen mit den IDs 1, 3 und 6 auf.<br>
Feld: `pagetitle` - Operator: `LIKE` - Wert: `Seite%` listet alle Ressourcen mit einem Seitentitel auf, der mit `Seite` beginnt.<br>
';
$_lang['batcher.filter.element_type'] = 'Element-Typ';
$_lang['batcher.hidemenu'] = 'Nicht in Menüs anzeigen';
$_lang['batcher.intro_msg'] = 'Hier können Sie einige Einstellungen für mehrere Ressourcen gleichzeitig bearbeiten. Beginnen Sie, indem Sie die Ressourcen auswählen, die Sie bearbeiten möchten.';
$_lang['batcher.menu_desc'] = 'Bearbeiten Sie mehrere Ressourcen oder Elemente gleichzeitig.';
$_lang['batcher.parent'] = 'Eltern-Ressource';
$_lang['batcher.parent_err_nf'] = 'Eltern-Ressource nicht gefunden.';
$_lang['batcher.parent_err_ns'] = 'Eltern-Ressource nicht angegeben.';
$_lang['batcher.pub_date'] = 'Veröffentlichungsdatum';
$_lang['batcher.published'] = 'Veröffentlicht';
$_lang['batcher.publishedby'] = 'Veröffentlicht von';
$_lang['batcher.resources'] = 'Ressourcen';
$_lang['batcher.resources_affect'] = 'Dies wirkt sich auf die folgenden Ressourcen aus:';
$_lang['batcher.resources_err_ns'] = 'Bitte wählen Sie zunächst eine oder mehrere Ressourcen aus, für die diese Aktion ausgeführt werden soll!';
$_lang['batcher.richtext'] = 'Rich-Text-Editor aktiviert';
$_lang['batcher.searchable'] = 'Durchsuchbar';
$_lang['batcher.context'] = 'Kontext';
$_lang['batcher.template'] = 'Template';
$_lang['batcher.template_err_nf'] = 'Template nicht gefunden.';
$_lang['batcher.template_err_ns'] = 'Template nicht angegeben.';
$_lang['batcher.template.tvdefaults.intro_msg'] = 'Hier können Sie die Standardwerte der Template-Variablen für dieses Template festlegen. Wählen Sie die Template-Variablen aus, die Sie ändern möchten.';
$_lang['batcher.template.tvs.intro_msg'] = 'Hier können Sie die Werte der Template-Variablen für alle Ressourcen, die dieses Template verwenden, festlegen. Wählen Sie die Template-Variablen aus, die Sie ändern möchten.';
$_lang['batcher.templates'] = 'Templates';
$_lang['batcher.templates_err_ns'] = 'Bitte wählen Sie zunächst ein oder mehrere Templates aus, für die diese Aktion ausgeführt werden soll!';
$_lang['batcher.templates.intro_msg'] = 'Hier können Sie einige Einstellungen für mehrere Templates gleichzeitig bearbeiten. Beginnen Sie, indem Sie die Templates auswählen, die Sie bearbeiten möchten.';
$_lang['batcher.tvs'] = 'Template-Variablen';
$_lang['batcher.tvs_err_ns'] = 'Keine Template-Variable angegeben!';
$_lang['batcher.toggle'] = 'Umschalten';
$_lang['batcher.uncacheable'] = 'Cache nicht aktiv';
$_lang['batcher.undeleted'] = 'Nicht gelöscht';
$_lang['batcher.unhidemenu'] = 'In Menüs anzeigen';
$_lang['batcher.unpub_date'] = 'Zurückziehungs-Datum';
$_lang['batcher.unpublished'] = 'Zurückgezogen';
$_lang['batcher.unrichtext'] = 'Rich-Text-Editor deaktiviert';
$_lang['batcher.unsearchable'] = 'Nicht durchsuchbar';
$_lang['batcher.user_err_nf'] = 'Benutzer nicht gefunden.';
$_lang['batcher.permanentdelete'] = 'Dauerhaft löschen';
$_lang['batcher.permanentdelete.title'] = 'Ressourcen dauerhaft löschen?';
$_lang['batcher.permanentdelete.message'] = 'Sind Sie sicher, dass Sie alle ausgewählten Ressourcen dauerhaft löschen möchten? Dies kann nicht rückgängig gemacht werden.';
$_lang['batcher.resources.all'] = 'Alle Ressourcen';
$_lang['batcher.resources.published'] = 'Veröffentlicht';
$_lang['batcher.resources.unpublished'] = 'Zurückgezogen';
$_lang['batcher.resources.deleted'] = 'Gelöscht';

$_lang['batcher.elements'] = 'Elemente';
$_lang['batcher.elements.intro_msg'] = 'Hier können Sie einige Einstellungen für mehrere Elemente gleichzeitig bearbeiten. Beginnen Sie, indem Sie die Elemente auswählen, die Sie bearbeiten möchten.';
