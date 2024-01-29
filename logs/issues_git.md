
When there is a conflict during a merge, you have to finish the merge commit manually.
You can use git commit -am "your commit message" to perform add and commit operations on tracked files simultaneously
https://stackoverflow.com/questions/2474097/how-do-i-finish-the-merge-after-resolving-my-merge-conflicts



A merge between two local branches of your local repo should not require any "remote" (which is a reference to an upstream repo URL)

So, if you want to merge another local branch into your current checked out branch, don't just type git merge (which would trigger the fatal: No remote for the current branch. error message)

https://stackoverflow.com/questions/48293820/what-does-no-remote-for-the-current-branch-mean

vscode pull error: you can see vscode git cmdline outputs in output console at the bottom
 
> git pull --tags
There is no tracking information for the current branch.
Please specify which branch you want to merge with.
See git-pull(1) for details.

    git pull <remote> <branch>

If you wish to set tracking information for this branch you can do so with:

    git branch --set-upstream-to=origin/<branch> main

[http]
	version = HTTP/1.1
	postBuffer = 524288000

[core] 
    packedGitLimit = 512m 
    packedGitWindowSize = 512m 
[pack] 
    deltaCacheSize = 2047m 
    packSizeLimit = 2047m 
    windowMemory = 2047m
https://stackoverflow.com/questions/38618885/error-rpc-failed-curl-transfer-closed-with-outstanding-read-data-remaining
