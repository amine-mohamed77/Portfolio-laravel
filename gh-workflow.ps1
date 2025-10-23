# ===== GitHub CLI Workflow =====
# Workflow: create, list, close, reopen issues

function Create-Issue {
    param (
        [string]$Title,
        [string]$Body,
        [string]$Label = "feature",
        [string]$Assignee = ""
    )

    if ($Assignee -eq "") {
        gh issue create --title "$Title" --body "$Body" --label "$Label"
    } else {
        gh issue create --title "$Title" --body "$Body" --label "$Label" --assignee "$Assignee"
    }
}

function List-Issues {
    gh issue list
}

function Close-Issue {
    param ([int]$Number)
    gh issue close $Number
}

function Reopen-Issue {
    param ([int]$Number)
    gh issue reopen $Number
}

# ===== Menu =====
while ($true) {
    Write-Host "`n===== GitHub Issues Workflow ====="
    Write-Host "1. Create Issue"
    Write-Host "2. List Issues"
    Write-Host "3. Close Issue"
    Write-Host "4. Reopen Issue"
    Write-Host "5. Exit"
    $choice = Read-Host "Choose an option (1-5)"

    switch ($choice) {
        1 {
            $title = Read-Host "Enter Issue Title"
            $body = Read-Host "Enter Issue Description"
            $label = Read-Host "Enter Label (default: feature)"
            if ($label -eq "") { $label = "feature" }
            $assignee = Read-Host "Enter Assignee (optional)"
            Create-Issue -Title $title -Body $body -Label $label -Assignee $assignee
        }
        2 { List-Issues }
        3 { 
            $num = Read-Host "Enter Issue Number to Close"
            Close-Issue -Number $num
        }
        4 {
            $num = Read-Host "Enter Issue Number to Reopen"
            Reopen-Issue -Number $num
        }
        5 { break }
        default { Write-Host "Invalid choice!" }
    }
}
