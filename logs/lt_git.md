git branch -r
git show-branch                 - https://devhints.io/git-branch
git shortlog
git log --stat
git checkout -b ＜new-branch＞ ＜existing-branch＞

git merge-base feature main
git remote show origingib -r

git ls-files | xargs cat | wc -l  [26 jun 2022] LOC estimation
xargs will let you cat all the files together before passing them to wc, git ls-files | xargs wc -l
git ls-files -s            - a debug utility for inspecting the state of the Staging Index tree.
git reset

git stash -u
git stash -a               - by default Git won't stash changes made to untracked or ignored files.
git stash save "message"

A fun metaphor is to think of Git as a timeline management utility. Commits are snapshots of a point in time or points of interest along the timeline of a project's history. Additionally, multiple timelines can be managed through the use of branches. When 'undoing' in Git, you are usually moving back in time, or to another timeline where mistakes didn't happen.

Checking out an old file does not move the HEAD pointer. It remains on the same branch and same commit, avoiding a 'detached head' state. You can then commit the old version of the file in a new snapshot as you would any other changes. So, in effect, this usage of git checkout on a file, serves as a way to revert back to an old version of an individual file.

Commit History is one of the 'three git trees' the other two, Staging Index and Working Directory are not as permanent as Commits. Care must be taken when using this tool, as it’s one of the only Git commands that have the potential to lose your work.

https://www.atlassian.com/git/tutorials/undoing-changes
https://www.atlassian.com/git/tutorials/using-branches/git-checkout


upstream usually means central repository - https://stackoverflow.com/questions/2739376/definition-of-downstream-and-upstream/2749166#2749166

git merge <branch>/<file> and git commit -a 
git stash and git checkout main and git stash pop
git stash apply to again git stash pop on the branch or git merge main

git config --global http.postBuffer 524288000  error: RPC failed; curl 18 transfer closed with out
https://stackoverflow.com/questions/38618885/error-rpc-failed-curl-transfer-closed-with-outstanding-read-data-remaining

git config --global http.version HTTP/1.1      error: RPC failed; curl 92 HTTP/2 stream 0 was not closed cleanly: CANCEL (err 8)
https://stackoverflow.com/questions/59282476/error-rpc-failed-curl-92-http-2-stream-0-was-not-closed-cleanly-protocol-erro
