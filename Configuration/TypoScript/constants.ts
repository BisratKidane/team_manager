
plugin.tx_teammanager_myteam {
    view {
        # cat=plugin.tx_teammanager_myteam/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:team_manager/Resources/Private/Templates/
        # cat=plugin.tx_teammanager_myteam/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:team_manager/Resources/Private/Partials/
        # cat=plugin.tx_teammanager_myteam/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:team_manager/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_teammanager_myteam//a; type=string; label=Default storage PID
        storagePid =
    }
}
