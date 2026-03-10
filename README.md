# test_stale_action

This is a repository for testing the gitub stale action.

The stale action has been adjusted in order to:

- add the label `Stale` to a PR or Issues after one day of inactivity
  - the PR or Issue additionally needs one of the labels `status:needs work` or `status: needs more infos`
- close a PR or Issue with label `Stale` after one day of inactivity

See stale-configuration in this repos at:

- [.github/workflows/stale.yml](https://github.com/systopia/test_stale_action/blob/main/.github/workflows/stale.yml)

## Getting Started

Nothing needs to be done except to add a few PRs and Issues with one of the following labels:

- `status:needs more infos`
- `status:needs work`

Add some more PRs and Issues with those labels but also with the label

- `important`

That label is supposed to prevent the closing of issues in any case.
