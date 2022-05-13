
When there is a conflict during a merge, you have to finish the merge commit manually.
You can use git commit -am "your commit message" to perform add and commit operations on tracked files simultaneously
https://stackoverflow.com/questions/2474097/how-do-i-finish-the-merge-after-resolving-my-merge-conflicts



A merge between two local branches of your local repo should not require any "remote" (which is a reference to an upstream repo URL)

So, if you want to merge another local branch into your current checked out branch, don't just type git merge (which would trigger the fatal: No remote for the current branch. error message)

https://stackoverflow.com/questions/48293820/what-does-no-remote-for-the-current-branch-mean